<?php

namespace Staff;

class ProjectManager extends Employee
{
    protected bool $teamLead;
    protected int $teamSize;

    public function __construct(string $id, string $firstName, string $lastName, string $email, string $gender, int $age, float $salary, bool $teamLead=FALSE, int $teamSize=0)
    {
        parent::__construct($id, $firstName, $lastName, $email, $gender, $age, $salary);
        $this->teamLead = $teamLead;
        $this->teamSize = $teamSize;
    }

    public function setTeamLead($mode=TRUE)
    {
        if ($this->teamLead != $mode) {
            print("$this->firstName $this->lastName is already Team Lead.\n");
        }
        else {
            $this->teamLead = $mode;
            $modeString = (string) $mode;
            print("Team Lead status set to $modeString.\n");
        }
    }

    public function changeTeamSize(string $type, int $num=0)
    {
        if ($type == "increase") {
            $this->teamSize += $num;
        }
        elseif ($type == "decrease") {
            $this->teamSize -= $num;
        }
        print("Team Size updated successfully");
    }

    public function statusCheck()
    {
        $teamLeadStatus = (string) $this->teamLead;
        print("Team Lead status: $teamLeadStatus.\n");
        print("Team Size: $this->teamSize.\n");

    }
}

