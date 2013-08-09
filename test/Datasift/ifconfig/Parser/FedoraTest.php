<?php
/**
 * Copyright (c) 2013-present Mediasift Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the names of the copyright holders nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Libraries
 * @package   IfconfigParser\Test
 * @author    Michael Heap <michael.heap@datasift.com>
 * @copyright 2013-present Mediasift Ltd www.datasift.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://github.com/datasift/ifconfig-parser-php
 */

use Datasift\IfconfigParser\Parser\Fedora;

require_once __DIR__.'/../ParserTestBase.php';
class FedoraTest extends ParserTestBase {

    public function setUp(){
        $this->parser = new Fedora;
    }

    public function exampleIfconfigProvider(){

        return array(
            array('eth0: flags=4099<UP,BROADCAST,MULTICAST> mtu 1500
ether ee:35:86:85:29:23 txqueuelen 1000 (Ethernet)
RX packets 0 bytes 0 (0.0 B)
RX errors 0 dropped 0 overruns 0 frame 0
TX packets 0 bytes 0 (0.0 B)
TX errors 0 dropped 0 overruns 0 carrier 0 collisions 0

lo: flags=73<UP,LOOPBACK,RUNNING> mtu 65536
inet 127.0.0.1 netmask 255.0.0.0
inet6 ::1 prefixlen 128 scopeid 0x10<host>
loop txqueuelen 0 (Local Loopback)
RX packets 809673 bytes 75749780 (72.2 MiB)
RX errors 0 dropped 0 overruns 0 frame 0
TX packets 809673 bytes 75749780 (72.2 MiB)
TX errors 0 dropped 0 overruns 0 carrier 0 collisions 0

p2p1: flags=4163<UP,BROADCAST,RUNNING,MULTICAST> mtu 1500
inet 192.168.1.244 netmask 255.255.255.0 broadcast 192.168.1.255
inet6 fe80::922b:34ff:fe5e:42c6 prefixlen 64 scopeid 0x20<link>
ether 90:2b:34:5e:42:c6 txqueuelen 1000 (Ethernet)
RX packets 2617318 bytes 1883929839 (1.7 GiB)
RX errors 0 dropped 0 overruns 0 frame 0
TX packets 1496097 bytes 262141712 (249.9 MiB)
TX errors 0 dropped 0 overruns 0 carrier 0 collisions 0',
                array(
                    $this->getNetworkInterface("eth0", null),
                    $this->getNetworkInterface("lo", "127.0.0.1"),
                    $this->getNetworkInterface("p2p1", "192.168.1.244")
                )
            )
        );
    }
}

