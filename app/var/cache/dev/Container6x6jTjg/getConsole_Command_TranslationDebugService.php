<?php

namespace Container6x6jTjg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/src/Controller/AnalyticGroupController.php'), 3 => (\dirname(__DIR__, 4).'/src/Controller/CalculationController.php'), 4 => (\dirname(__DIR__, 4).'/src/Controller/DepartmentController.php'), 5 => (\dirname(__DIR__, 4).'/src/Controller/DocumentController.php'), 6 => (\dirname(__DIR__, 4).'/src/Controller/FinanceGroupController.php'), 7 => (\dirname(__DIR__, 4).'/src/Controller/HomeController.php'), 8 => (\dirname(__DIR__, 4).'/src/Controller/MaterialController.php'), 9 => (\dirname(__DIR__, 4).'/src/Controller/MaterialNormController.php'), 10 => (\dirname(__DIR__, 4).'/src/Controller/NormDocumentController.php'), 11 => (\dirname(__DIR__, 4).'/src/Controller/ProductCategoryController.php'), 12 => (\dirname(__DIR__, 4).'/src/Controller/ProductController.php'), 13 => (\dirname(__DIR__, 4).'/src/Controller/ProductGroupController.php'), 14 => (\dirname(__DIR__, 4).'/src/Controller/ProductKindController.php'), 15 => (\dirname(__DIR__, 4).'/src/Controller/ProductTypeController.php'), 16 => (\dirname(__DIR__, 4).'/src/Controller/ProductionPlanController.php'), 17 => (\dirname(__DIR__, 4).'/src/Controller/SpecificationController.php'), 18 => (\dirname(__DIR__, 4).'/src/Controller/SpecificationSectionController.php'), 19 => (\dirname(__DIR__, 4).'/src/Controller/StructureController.php'), 20 => (\dirname(__DIR__, 4).'/src/Controller/TechnologicalOperationController.php'), 21 => (\dirname(__DIR__, 4).'/src/Controller/TrackController.php'), 22 => (\dirname(__DIR__, 4).'/src/Controller/TrackDocumentController.php'), 23 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 24 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 25 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), 26 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 27 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 28 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 29 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 30 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 31 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 32 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 33 => (\dirname(__DIR__, 4).'/src/Controller/RenditionController.php'), 34 => (\dirname(__DIR__, 4).'/src/Controller/UnitController.php'), 35 => (\dirname(__DIR__, 4).'/src/Controller/UserController.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }
}