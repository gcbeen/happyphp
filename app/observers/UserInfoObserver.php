<?php

/**
 * Class UserObserver
 */
class UserInfoObserver {

	// overwrite
    public function saving(Eloquent $model){
        return $model->getValid();
    }

}
