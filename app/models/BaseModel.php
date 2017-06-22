<?php
class BaseModel extends \Phalcon\Mvc\Model
{
    public $created_time;
    public $modified_time;
    public function initialize()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->useDynamicUpdate(true);
    }
    public static function getPaginate($params, $page = 1, $limit = 5)
    {
        $paginator = new \Phalcon\Paginator\Adapter\Model(array(
            'data'  => static::find($params),
            'limit' => $limit,
            'page'  => $page,
        ));
        return $paginator->getPaginate();
    }

    protected function getHasher()
    {
        if (!isset($this->hasher)) {
            $this->hasher = new \Hashids\Hashids($this->getDI()->get('config')->security->salt . get_class($this), 7);
        }

        return $this->hasher;
    }

    public function getHashId()
    {
        if (!isset($this->hash_id)) {
            $this->hash_id = $this->getHasher()->encode($this->id);
        }
        return $this->hash_id;
    }
    public static function getDecodeHashId($id){
        $salt      = \Phalcon\DI::getDefault()->get('config')->security->salt;
        $className = get_called_class();
        $hasher    = new \Hashids\Hashids($salt . $className, 7);
        $id        = current($hasher->decode($id));
        return $id;
    }
    public static function findByHashId($id)
    {
        $salt      = \Phalcon\DI::getDefault()->get('config')->security->salt;
        $className = get_called_class();
        $hasher    = new \Hashids\Hashids($salt . $className, 7);
        $id        = current($hasher->decode($id));
        return static::findFirst('id=' . $id);
    }

    public function getHumanTime()
    {
        $cur_time     = new \DateTime();
        $cur_time_utc = new \DateTime(null, new \DateTimeZone("UTC"));
        $created_time = new \DateTime($this->created_time, new \DateTimeZone("Asia/Saigon"));
        $created_time->setTimezone(new \DateTimeZone("UTC"));
        $time_elapsed = $cur_time_utc->getTimestamp() - $created_time->getTimestamp();
        $seconds      = $time_elapsed;
        $minutes      = round($time_elapsed / 60);
        $hours        = round($time_elapsed / 3600);
        $days         = round($time_elapsed / 86400);
        $weeks        = round($time_elapsed / 604800);
        $months       = round($time_elapsed / 2600640);
        $years        = round($time_elapsed / 31207680);
        // Seconds
        if ($seconds <= 60) {
            return "{$seconds}s";
        } else if ($minutes <= 60) {
            return "{$minutes}m";
        } else if ($hours <= 24) {
            return "{$hours}h";
        } else if ($days <= 7) {
            return "{$days}d";
        } else if ($weeks <= 4.3) {
            return "{$weeks}w";
        } else if ($months <= 12) {
            return $created_time->format('d M');
        } else {
            return "{$years}y";
        }
    }

}
