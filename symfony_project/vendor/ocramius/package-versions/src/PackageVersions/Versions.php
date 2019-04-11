<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.6.1@53120e0eb10355388d6ccbe462f1fea34ddadb24',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.1@d2ae4ef05e25197343b6a39bae1d3c427a2f6956',
  'doctrine/common' => 'v2.10.0@30e33f60f64deec87df728c02b107f82cdafad9d',
  'doctrine/dbal' => 'v2.9.2@22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9',
  'doctrine/doctrine-bundle' => '1.10.2@1f99e6645030542079c57d4680601a4a8778a1bd',
  'doctrine/doctrine-cache-bundle' => '1.3.5@5514c90d9fb595e1095e6d66ebb98ce9ef049927',
  'doctrine/doctrine-migrations-bundle' => 'v2.0.0@4c9579e0e43df1fb3f0ca29b9c20871c824fac71',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'doctrine/lexer' => 'v1.0.1@83893c552fd2045dd78aef794c31e694c37c0b8c',
  'doctrine/migrations' => 'v2.0.0@0101f5bd7f4e5043bf8630db2930f8fd7da552b6',
  'doctrine/orm' => 'v2.6.3@434820973cadf2da2d66e7184be370084cc32ca8',
  'doctrine/persistence' => 'v1.1.0@c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'easycorp/easyadmin-bundle' => 'v2.1.1@bc27c0727b1416c740117abee8002988056f3cbc',
  'egulias/email-validator' => '2.1.7@709f21f92707308cdf8f9bcfa1af4cb26586521e',
  'fig/link-util' => '1.0.0@1a07821801a148be4add11ab0603e4af55a72fac',
  'guzzlehttp/guzzle' => '6.3.3@407b0cb880ace85c9b63c5f9551db498cb2d50ba',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.5.2@9f83dded91781a01c63574e387eaa769be769115',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'kevinrob/guzzle-cache-middleware' => 'v2.1.1@6952064f7747756b0be7b4c234c0fd7535ea4c8c',
  'monolog/monolog' => '1.24.0@bfc9ebb28f97e7a24c45bdc3f0ff482e47bb0266',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'ocramius/proxy-manager' => '2.1.1@e18ac876b2e4819c76349de8f78ccc8ef1554cd7',
  'pagerfanta/pagerfanta' => 'v2.1.2@45a85ad426316ae37f2d007022e5b4c95bc3aef4',
  'php-tmdb/api' => '2.1.16@53925e50c0541b20a24f4cfc89b253b251a236c7',
  'php-tmdb/symfony' => '2.2.0@236082c1802c543c9c474d9b942d5498e9208fc6',
  'phpdocumentor/reflection-common' => '1.0.1@21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  'phpdocumentor/reflection-docblock' => '4.3.0@94fd0001232e47129dd3504189fa1c7225010d08',
  'phpdocumentor/type-resolver' => '0.4.0@9c977708995954784726e25d0cd1dddf4e65b0f7',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '2.0.5@5601c8a83fbba7ef674a7369456d12f1e0d0eafa',
  'rtheunissen/guzzle-log-middleware' => 'v0.4.2@6a15b7f71c6fc3f8456abeed530b2f12846f075f',
  'sensio/framework-extra-bundle' => 'v5.2.4@1fdf591c4b388e62dbb2579de89c1560b33f865d',
  'swiftmailer/swiftmailer' => 'v6.2.0@6fa3232ff9d3f8237c0fae4b7ff05e1baa4cd707',
  'symfony/asset' => 'v4.2.5@7eee96a8630f9448304ae4f0e3b474ea4e033664',
  'symfony/cache' => 'v4.2.5@3172c1e81fab8a21b35732ad8545e09877bb73d9',
  'symfony/config' => 'v4.2.5@0e745ead307d5dcd4e163e94a47ec04b1428943f',
  'symfony/console' => 'v4.2.5@24206aff3efe6962593297e57ef697ebb220e384',
  'symfony/contracts' => 'v1.0.2@1aa7ab2429c3d594dd70689604b5cf7421254cdf',
  'symfony/debug' => 'v4.2.5@43ce8ab34c734dcc8a4af576cb86711daab964c5',
  'symfony/dependency-injection' => 'v4.2.5@1806e43ff6bff57398d33b326cd753a12d9f434f',
  'symfony/doctrine-bridge' => 'v4.2.5@4505e2a8b98bfebaae9de8b9619a0f340ed4571f',
  'symfony/dotenv' => 'v4.2.5@b541d63b83532be55a020db8ed2e50598385a583',
  'symfony/event-dispatcher' => 'v4.2.5@ca5af306fbc37f3cf597e91bc9cfa0c7d3f33544',
  'symfony/expression-language' => 'v4.2.5@a69b153996a13ffdb05395e8724c7217a8448e9e',
  'symfony/filesystem' => 'v4.2.5@e16b9e471703b2c60b95f14d31c1239f68f11601',
  'symfony/finder' => 'v4.2.5@267b7002c1b70ea80db0833c3afe05f0fbde580a',
  'symfony/flex' => 'v1.2.1@305a6cd75a54992f47f46eb655245b6c9a06997a',
  'symfony/form' => 'v4.2.5@8c9b20399d57d6718d322d659be8b50ac05c87fb',
  'symfony/framework-bundle' => 'v4.2.5@2cd66337a7effcdaaa23b4ac4541a5cffbbb7a61',
  'symfony/http-foundation' => 'v4.2.5@5b7ab6beaa5b053b8d3c9b13367ada9b292e12e1',
  'symfony/http-kernel' => 'v4.2.5@e8b940bbeebf0f96789b5d17d9d77f8b2613960b',
  'symfony/inflector' => 'v4.2.5@275e54941a4f17a471c68d2a00e2513fc1fd4a78',
  'symfony/intl' => 'v4.2.5@6361d2168db3ef9203eeb565f05c1108dd04f796',
  'symfony/monolog-bridge' => 'v4.2.5@472c74b350542e51373dcb159c0dcc234dc74e38',
  'symfony/monolog-bundle' => 'v3.3.1@572e143afc03419a75ab002c80a2fd99299195ff',
  'symfony/options-resolver' => 'v4.2.5@3896e5a7d06fd15fa4947694c8dcdd371ff147d1',
  'symfony/orm-pack' => 'v1.0.6@36c2a928482dc5f05c5c1c1b947242ae03ff1335',
  'symfony/polyfill-intl-icu' => 'v1.11.0@999878a3a09d73cae157b0cf89bb6fb2cc073057',
  'symfony/polyfill-intl-idn' => 'v1.11.0@c766e95bec706cdd89903b1eda8afab7d7a6b7af',
  'symfony/polyfill-mbstring' => 'v1.11.0@fe5e94c604826c35a32fa832f35bd036b6799609',
  'symfony/polyfill-php72' => 'v1.11.0@ab50dcf166d5f577978419edd37aa2bb8eabce0c',
  'symfony/process' => 'v4.2.5@1e6cbb41dadcaf29e0db034d6ad0d039a9df06e6',
  'symfony/property-access' => 'v4.2.5@5440dd2b5373073beee051bd978b58a0f543b192',
  'symfony/property-info' => 'v4.2.5@22d5dffd43454b5c8b5c1432b6ffef53e9f058e5',
  'symfony/routing' => 'v4.2.5@319f600c1ea0f981f6bdc2f042cfc1690957c0e0',
  'symfony/security-bundle' => 'v4.2.5@db2697eba81ebe09290a9aeddf41f24f1ed35002',
  'symfony/security-core' => 'v4.2.5@d4d72ea26792370db1079fe9ecec707694482f1e',
  'symfony/security-csrf' => 'v4.2.5@385dcfcd6cf02e0b8d10524bd072169be2d5494b',
  'symfony/security-guard' => 'v4.2.5@1313f51e126e03e13aaf83d471f087647701e0ac',
  'symfony/security-http' => 'v4.2.5@d9eacf6588360f0bf17bca2b3b456cd00b591b72',
  'symfony/serializer' => 'v4.2.5@d7c959be961d05d78931c0f739abec9903e006b1',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/stopwatch' => 'v4.2.5@b1a5f646d56a3290230dbc8edf2a0d62cda23f67',
  'symfony/swiftmailer-bundle' => 'v3.2.5@ac4f38c2ec7957f2dec8b6c2f24a060b10a254f2',
  'symfony/translation' => 'v4.2.5@e46933cc31b68f51f7fc5470fb55550407520f56',
  'symfony/twig-bridge' => 'v4.2.5@ae8c3faafec299e8f4e500c0b96cb0e52cfcee90',
  'symfony/twig-bundle' => 'v4.2.5@6c6e3be7020563c36a34139bef94fed0735cdf9e',
  'symfony/validator' => 'v4.2.5@db5457ed88aacc1a040d4961ee52cddad3e5a4aa',
  'symfony/var-exporter' => 'v4.2.5@d8bf4424c232b55f4c1816037d3077a89258557e',
  'symfony/web-link' => 'v4.2.5@47b8188b4bb8d24eef0bb287b0737d5b84a6cab8',
  'symfony/yaml' => 'v4.2.5@6712daf03ee25b53abb14e7e8e0ede1a770efdb1',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.7.4@ed9c49220e09bfaeb1ba4d48077c08a7b09908dd',
  'webmozart/assert' => '1.4.0@83e253c8e0be5b0257b881e1827274667c5c17a9',
  'zendframework/zend-code' => '3.3.1@c21db169075c6ec4b342149f446e7b7b724f95eb',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => 'v1.3.1@3a1e2c3c600e615a2dffe56d4ca0875cc5233e0a',
  'doctrine/doctrine-fixtures-bundle' => '3.1.0@f016565b251c2dfa32a8d6da44d1650dc9ec1498',
  'easycorp/easy-log-handler' => 'v1.0.7@5f95717248d20684f88cfb878d8bf3d78aadcbba',
  'facebook/webdriver' => '1.6.0@bd8c740097eb9f2fc3735250fc1912bc811a954e',
  'nikic/php-parser' => 'v4.2.1@5221f49a608808c1e4d436df32884cbc1b821ac0',
  'symfony/browser-kit' => 'v4.2.5@61d85c5af2fc058014c7c89504c3944e73a086f0',
  'symfony/css-selector' => 'v4.2.5@48eddf66950fa57996e1be4a55916d65c10c604a',
  'symfony/debug-bundle' => 'v4.2.5@2329d9407fbc50429409633e8215708929d8f389',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v4.2.5@53c97769814c80a84a8403efcf3ae7ae966d53bb',
  'symfony/maker-bundle' => 'v1.11.5@186ffc80b8f363e04ea3c2ebf49e1263a84b4e39',
  'symfony/panther' => 'v0.3.0@5e41bc856eded5f546c71173a1e8e260c5e3a07a',
  'symfony/phpunit-bridge' => 'v4.2.5@8796da921e4613352818b478e9bb0803ea0dbb9a',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.5@1792b80cc2da5310e84afa983682b71dfc409d17',
  'symfony/var-dumper' => 'v4.2.5@9f87189ac10b42edf7fb8edc846f1937c6d157cf',
  'symfony/web-profiler-bundle' => 'v4.2.5@82711c952fd3dd95812ffe840d7f1b86f3516774',
  'symfony/web-server-bundle' => 'v4.2.5@91945ba7f59f2a4b4194f018da9d7aaedaf88418',
  'paragonie/random_compat' => '2.*@dd0e18e1badc3f64cd75d0899d2bff91de0ca1fe',
  'symfony/polyfill-ctype' => '*@dd0e18e1badc3f64cd75d0899d2bff91de0ca1fe',
  'symfony/polyfill-iconv' => '*@dd0e18e1badc3f64cd75d0899d2bff91de0ca1fe',
  'symfony/polyfill-php71' => '*@dd0e18e1badc3f64cd75d0899d2bff91de0ca1fe',
  'symfony/polyfill-php70' => '*@dd0e18e1badc3f64cd75d0899d2bff91de0ca1fe',
  'symfony/polyfill-php56' => '*@dd0e18e1badc3f64cd75d0899d2bff91de0ca1fe',
  '__root__' => 'dev-master@dd0e18e1badc3f64cd75d0899d2bff91de0ca1fe',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}
