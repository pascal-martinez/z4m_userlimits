<?php

/*
 * ZnetDK, Starter Web Application for rapid & easy development
 * See official website https://www.znetdk.fr
 * Copyright (C) 2025 Pascal MARTINEZ (contact@znetdk.fr)
 * License GNU GPL http://www.gnu.org/licenses/gpl-3.0.html GNU GPL
 * --------------------------------------------------------------------
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * --------------------------------------------------------------------
 * ZnetDK 4 Mobile User Limits module class
 * 
 * File version: 1.0
 * Last update: 07/13/2025
 */

namespace z4m_userlimits\mod;

/**
 * User limits
 */
class UserLimits {
    
    /**
     * User limits displayed on the dashboard box of the home menu
     * @return array An associative array with the 'user_accounts' and 
     * max_user_accounts' keys.
     */
    static public function getInfos() {
        $userAccounts = [];
        $total = \UserManager::getSearchedUsers(NULL, NULL, ['status' => 1], 'user_id', $userAccounts);
        return [
            'user_accounts' => $total,
            'max_user_accounts' => MOD_Z4M_USERLIMITS_MAX_USER_ACCOUNTS
        ];
    }
    
    static public function isMaxUserAccountReached() {
        $infos = self::getInfos();
        return $infos['user_accounts'] >= $infos['max_user_accounts'];
    }
    
    static public function isFullMenuAccessAllowedForUser($loginName) {
        if (MOD_Z4M_USERLIMITS_FULL_MENU_ACCESS_RESTRICTION === NULL || (
                is_array(MOD_Z4M_USERLIMITS_FULL_MENU_ACCESS_RESTRICTION) 
                && in_array($loginName, MOD_Z4M_USERLIMITS_FULL_MENU_ACCESS_RESTRICTION))) {
            return TRUE;
        }
        return FALSE;
    }
}
