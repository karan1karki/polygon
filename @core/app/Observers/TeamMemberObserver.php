<?php

namespace App\Observers;

use App\TeamMember;

class TeamMemberObserver
{
    /**
     * Handle the team member "created" event.
     *
     * @param  \App\TeamMember  $teamMember
     * @return void
     */
    public function creating(TeamMember $teamMember)
    {
        if (is_null($teamMember->position)) {
            $teamMember->position = TeamMember::max('position') + 1;
            return;
        }

        $lowerPriorityCategories = TeamMember::where('position', '>=', $teamMember->position)
            ->get();

        foreach ($lowerPriorityCategories as $lowerPriorityCategory) {
            $lowerPriorityCategory->position++;
            $lowerPriorityCategory->saveQuietly();
        }
    }

    /**
     * Handle the team member "updated" event.
     *
     * @param  \App\TeamMember  $teamMember
     * @return void
     */
    public function updating(TeamMember $teamMember)
    {
        if ($teamMember->isClean('position')) {
            return;
        }

        if (is_null($teamMember->position)) {
            $teamMember->position = TeamMember::max('position');
        }

        if ($teamMember->getOriginal('position') > $teamMember->position) {
            $positionRange = [
                $teamMember->position, $teamMember->getOriginal('position')
            ];
        } else {
            $positionRange = [
                $teamMember->getOriginal('position'), $teamMember->position
            ];
        }

        $lowerPriorityCategories = TeamMember::where('id', '!=', $teamMember->id)
            ->whereBetween('position', $positionRange)
            ->get();

        foreach ($lowerPriorityCategories as $lowerPriorityCategory) {
            if ($teamMember->getOriginal('position') < $teamMember->position) {
                $lowerPriorityCategory->position--;
            } else {
                $lowerPriorityCategory->position++;
            }
            $lowerPriorityCategory->saveQuietly();
        }
    }

    /**
     * Handle the team member "deleted" event.
     *
     * @param  \App\TeamMember  $teamMember
     * @return void
     */
    public function deleted(TeamMember $teamMember)
    {
        $lowerPriorityCategories = TeamMember::where('position', '>', $teamMember->position)
            ->get();

        foreach ($lowerPriorityCategories as $lowerPriorityCategory) {
            $lowerPriorityCategory->position--;
            $lowerPriorityCategory->saveQuietly();
        }
    }

    /**
     * Handle the team member "restored" event.
     *
     * @param  \App\TeamMember  $teamMember
     * @return void
     */
    public function restored(TeamMember $teamMember)
    {
        //
    }

    /**
     * Handle the team member "force deleted" event.
     *
     * @param  \App\TeamMember  $teamMember
     * @return void
     */
    public function forceDeleted(TeamMember $teamMember)
    {
        //
    }
}
