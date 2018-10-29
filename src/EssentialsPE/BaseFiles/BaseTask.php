<?php

declare(strict_types = 1);

namespace EssentialsPE\BaseFiles;

use EssentialsPE\Loader;
use pocketmine\plugin\Plugin;
use pocketmine\scheduler\Task;

abstract class BaseTask extends Task{
    /** @var BaseAPI */
    private $api;

    /**
     * @param BaseAPI $api
     */
    public function __construct(BaseAPI $api){
        $this->api = $api;
    }

    /**
     * @return Loader|Plugin
     */
    public final function getPlugin(): Plugin{
        return $this->getAPI()->getEssentialsPEPlugin();
    }

    /**
     * @return BaseAPI
     */
    public final function getAPI(): BaseAPI{
        return $this->api;
    }
}
