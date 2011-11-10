<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 * 
 * Mysql/Link dumper
 *
 * (c) Raúl Fraile Beneyto <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Extension\Resource;

use Ladybug\Dumper;
use Ladybug\Extension;

class MysqlLink extends Extension {
    
    
    public function dump($var) {
        $result = array(
            'Host info' => mysql_get_host_info($var),
            'MySQL protocol version' => mysql_get_proto_info($var),
            'MySQL server version' => mysql_get_server_info($var),
        );
        
        return $result;
    }
}