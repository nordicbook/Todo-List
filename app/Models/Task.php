<?php
namespace Todo\Models;

use DateTime;

class Task
{
    protected $id;
    protected $complete = false;
    protected $description;
    protected $due;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param bool $complete
     */
    public function setComplete($complete = true)
    {
        $this->complete = $complete;
    }

    /**
     * @return bool
     */
    public function getComplete()
    {
        return (bool) $this->complete;
    }

    /**
     * @param mixed $due
     */
    public function setDue(DateTime $due)
    {
        $this->due = $due;
    }

    /**
     * @return DateTime
     * @throws \Exception
     */
    public function getDue()
    {
        if (!$this->due instanceof DateTime)
            return new DateTime($this->due);

        return $this->due;
    }

}