<?php

User::observe(new UserObserver());

UserInfo::observe(new UserInfoObserver()); 
