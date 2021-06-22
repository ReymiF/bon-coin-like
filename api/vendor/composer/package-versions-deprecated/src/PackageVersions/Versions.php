<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.0.3@c9622c6820d3ede1e2315a6a377ea1076e421d88',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.x-dev@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.4@207210c57f6c15835e8d6228075cd235bd061efc',
  'doctrine/orm' => '2.9.3@82e77cf5089a1303733f75f0f0ed01be3ab9ec22',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.4.0@2b0bb59ade31a045fd3ff0097dc558bb896f6596',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'symfony/cache' => '5.4.x-dev@b602a626efbb17711aca9748e5a0341a98dec599',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => '5.4.x-dev@4854ce5473ad4fe547b7ff9fd5cf92f6c676d2cb',
  'symfony/console' => '5.4.x-dev@4411daa706a497da39b56619c0b2dbbe42b1fba3',
  'symfony/dependency-injection' => '5.4.x-dev@a64df4ab5ed73db4f4b0df74e5714c4bbfa5829e',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => '5.4.x-dev@7fb05ad7936d3750876c7594f3439a5d4cad7749',
  'symfony/dotenv' => '5.4.x-dev@4ababad35dbb739b521614d3094d7e5e0d1d06e4',
  'symfony/error-handler' => '5.4.x-dev@4c6b9fc3a006e124bfbaba2c82436c76b160249b',
  'symfony/event-dispatcher' => '5.4.x-dev@aecf90ffee8f1d2a2c169ec51cd1177027fc3ace',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/filesystem' => '5.4.x-dev@348116319d7fb7d1faa781d26a48922428013eb2',
  'symfony/finder' => '5.4.x-dev@0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/framework-bundle' => '5.4.x-dev@866927956a25f029d96be27510f655789ecf0ef0',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => '5.4.x-dev@3891953775fd812bf25f43c1e4736c75099e5f13',
  'symfony/http-kernel' => '5.4.x-dev@6486ca4f71214eb04d0009efb19aab44b488b6ef',
  'symfony/password-hasher' => '5.4.x-dev@6c384e6abd88e73fdd7353be31710412e04efa1f',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/property-access' => '5.4.x-dev@fd89ef387030f4d4126fd9cddcc18dbfed27a346',
  'symfony/property-info' => '5.4.x-dev@a45839949b03e1437837000ce8319a9214974501',
  'symfony/proxy-manager-bridge' => '5.4.x-dev@a87444e1c0ae52d732011733c2d0baf183d34e9e',
  'symfony/routing' => '5.4.x-dev@d9b66a07fbbf0c7728f9654a26f3c89cfa15bcd6',
  'symfony/runtime' => '5.4.x-dev@1c18d8ef0140059c64ff02a5e17c1e856a7ce434',
  'symfony/security-bundle' => '5.4.x-dev@a489dded600a051f18e090f4e4496110c6cc1c52',
  'symfony/security-core' => '5.4.x-dev@05ea52b4369a3679057de38996ac999c78315dcc',
  'symfony/security-csrf' => '5.4.x-dev@f0595bce236ae778e02d61ee4cec8ed5eb2876f2',
  'symfony/security-guard' => '5.4.x-dev@240c71e09ce3f6acc2251495855353737aacff02',
  'symfony/security-http' => '5.4.x-dev@c3f1abc2d124f12c563eb63463cfa053fde4b1d3',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => '5.4.x-dev@313d02f59d6543311865007e5ff4ace05b35ee65',
  'symfony/string' => '5.4.x-dev@92855c727d7edabe004605f451ef0b274fa24490',
  'symfony/var-dumper' => '5.4.x-dev@b6bebc6da1a0f86556c18dc421e5a47c37a73ed8',
  'symfony/var-exporter' => '5.4.x-dev@ff86c9c7b8357c9eec5f0bd13ba75906fd594998',
  'symfony/yaml' => '5.4.x-dev@e24ecd6dd71b9c71b48f1e02cf3c789acbdf3d0e',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'symfony/maker-bundle' => 'v1.32.0@702558c5fc5a27796eedad12a82bb27be76247dc',
  'symfony/polyfill-ctype' => '*@4ef5d47d0f1459ca7fec9acebaee38bdfe93f832',
  'symfony/polyfill-iconv' => '*@4ef5d47d0f1459ca7fec9acebaee38bdfe93f832',
  'symfony/polyfill-php72' => '*@4ef5d47d0f1459ca7fec9acebaee38bdfe93f832',
  '__root__' => 'dev-master@4ef5d47d0f1459ca7fec9acebaee38bdfe93f832',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
