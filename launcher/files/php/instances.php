<?php
$instance['--Test'] = array_merge($instance['--Test'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "fabric",
        "loadder_version" => "latest"
    ),
    "verify" => false,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(
        'Arsuup'
    ),
    "whitelistActive" => true,
    "status" => array(
        "nameServer" => "LocalHost",
        "ip" => "localhost",
        "port" => 25565
    )
));

$instance['RP'] = array_merge($instance['RP'], array(
    "loadder" => array(
        "minecraft_version" => "1.19.2",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'options.txt',
        'optionsof.txt'
	),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Serveur",
        "ip" => "123.456.789.0",
        "port" => 25599
    )
));
?>
