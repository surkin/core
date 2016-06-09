<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Icewind\\Streams\\Tests\\' => 22,
            'Icewind\\Streams\\' => 16,
            'Icewind\\SMB\\Test\\' => 17,
            'Icewind\\SMB\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Icewind\\Streams\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/streams/tests',
        ),
        'Icewind\\Streams\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/streams/src',
        ),
        'Icewind\\SMB\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/smb/tests',
        ),
        'Icewind\\SMB\\' => 
        array (
            0 => __DIR__ . '/..' . '/icewind/smb/src',
        ),
    );

    public static $classMap = array (
        'Icewind\\SMB\\AbstractShare' => __DIR__ . '/..' . '/icewind/smb/src/AbstractShare.php',
        'Icewind\\SMB\\Connection' => __DIR__ . '/..' . '/icewind/smb/src/Connection.php',
        'Icewind\\SMB\\ErrorCodes' => __DIR__ . '/..' . '/icewind/smb/src/ErrorCodes.php',
        'Icewind\\SMB\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/AccessDeniedException.php',
        'Icewind\\SMB\\Exception\\AlreadyExistsException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/AlreadyExistsException.php',
        'Icewind\\SMB\\Exception\\AuthenticationException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/AuthenticationException.php',
        'Icewind\\SMB\\Exception\\ConnectException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectException.php',
        'Icewind\\SMB\\Exception\\ConnectionException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectionException.php',
        'Icewind\\SMB\\Exception\\ConnectionRefusedException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ConnectionRefusedException.php',
        'Icewind\\SMB\\Exception\\Exception' => __DIR__ . '/..' . '/icewind/smb/src/Exception/Exception.php',
        'Icewind\\SMB\\Exception\\FileInUseException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/FileInUseException.php',
        'Icewind\\SMB\\Exception\\ForbiddenException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/ForbiddenException.php',
        'Icewind\\SMB\\Exception\\HostDownException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/HostDownException.php',
        'Icewind\\SMB\\Exception\\InvalidHostException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidHostException.php',
        'Icewind\\SMB\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidPathException.php',
        'Icewind\\SMB\\Exception\\InvalidRequestException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidRequestException.php',
        'Icewind\\SMB\\Exception\\InvalidResourceException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidResourceException.php',
        'Icewind\\SMB\\Exception\\InvalidTypeException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/InvalidTypeException.php',
        'Icewind\\SMB\\Exception\\NoLoginServerException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NoLoginServerException.php',
        'Icewind\\SMB\\Exception\\NoRouteToHostException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NoRouteToHostException.php',
        'Icewind\\SMB\\Exception\\NotEmptyException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NotEmptyException.php',
        'Icewind\\SMB\\Exception\\NotFoundException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/NotFoundException.php',
        'Icewind\\SMB\\Exception\\TimedOutException' => __DIR__ . '/..' . '/icewind/smb/src/Exception/TimedOutException.php',
        'Icewind\\SMB\\FileInfo' => __DIR__ . '/..' . '/icewind/smb/src/FileInfo.php',
        'Icewind\\SMB\\IFileInfo' => __DIR__ . '/..' . '/icewind/smb/src/IFileInfo.php',
        'Icewind\\SMB\\IShare' => __DIR__ . '/..' . '/icewind/smb/src/IShare.php',
        'Icewind\\SMB\\NativeFileInfo' => __DIR__ . '/..' . '/icewind/smb/src/NativeFileInfo.php',
        'Icewind\\SMB\\NativeServer' => __DIR__ . '/..' . '/icewind/smb/src/NativeServer.php',
        'Icewind\\SMB\\NativeShare' => __DIR__ . '/..' . '/icewind/smb/src/NativeShare.php',
        'Icewind\\SMB\\NativeState' => __DIR__ . '/..' . '/icewind/smb/src/NativeState.php',
        'Icewind\\SMB\\NativeStream' => __DIR__ . '/..' . '/icewind/smb/src/NativeStream.php',
        'Icewind\\SMB\\Parser' => __DIR__ . '/..' . '/icewind/smb/src/Parser.php',
        'Icewind\\SMB\\RawConnection' => __DIR__ . '/..' . '/icewind/smb/src/RawConnection.php',
        'Icewind\\SMB\\Server' => __DIR__ . '/..' . '/icewind/smb/src/Server.php',
        'Icewind\\SMB\\Share' => __DIR__ . '/..' . '/icewind/smb/src/Share.php',
        'Icewind\\SMB\\System' => __DIR__ . '/..' . '/icewind/smb/src/System.php',
        'Icewind\\SMB\\TimeZoneProvider' => __DIR__ . '/..' . '/icewind/smb/src/TimeZoneProvider.php',
        'Icewind\\Streams\\CallbackWrapper' => __DIR__ . '/..' . '/icewind/streams/src/CallbackWrapper.php',
        'Icewind\\Streams\\Directory' => __DIR__ . '/..' . '/icewind/streams/src/Directory.php',
        'Icewind\\Streams\\DirectoryFilter' => __DIR__ . '/..' . '/icewind/streams/src/DirectoryFilter.php',
        'Icewind\\Streams\\DirectoryWrapper' => __DIR__ . '/..' . '/icewind/streams/src/DirectoryWrapper.php',
        'Icewind\\Streams\\File' => __DIR__ . '/..' . '/icewind/streams/src/File.php',
        'Icewind\\Streams\\IteratorDirectory' => __DIR__ . '/..' . '/icewind/streams/src/IteratorDirectory.php',
        'Icewind\\Streams\\NullWrapper' => __DIR__ . '/..' . '/icewind/streams/src/NullWrapper.php',
        'Icewind\\Streams\\Path' => __DIR__ . '/..' . '/icewind/streams/src/Path.php',
        'Icewind\\Streams\\RetryWrapper' => __DIR__ . '/..' . '/icewind/streams/src/RetryWrapper.php',
        'Icewind\\Streams\\SeekableWrapper' => __DIR__ . '/..' . '/icewind/streams/src/SeekableWrapper.php',
        'Icewind\\Streams\\Url' => __DIR__ . '/..' . '/icewind/streams/src/Url.php',
        'Icewind\\Streams\\UrlCallback' => __DIR__ . '/..' . '/icewind/streams/src/UrlCallBack.php',
        'Icewind\\Streams\\Wrapper' => __DIR__ . '/..' . '/icewind/streams/src/Wrapper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98fe9b281934250b3a93f69a5ce843b3::$classMap;

        }, null, ClassLoader::class);
    }
}
