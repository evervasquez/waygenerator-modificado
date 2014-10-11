<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 11/10/14
 * Time: 03:05 PM
 */

namespace Way\Generators\Commands;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class RepositoryGeneratorCommand extends GeneratorCommand{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'generate:repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a repository';

    /**
     * The path where the file will be created
     *
     * @return mixed
     */
    protected function getFileGenerationPath()
    {
        $path = $this->getPathByOptionOrConfig('path', 'repository_target_path');

        return $path. '/' . $this->argument('repositoryName') . '.php';
    }

    /**
     * Fetch the template data
     *
     * @return array
     */
    protected function getTemplateData()
    {
        return [
            'NAME' => ucwords($this->argument('repositoryName'))
        ];
    }

    /**
     * Get path to the template for the generator
     *
     * @return mixed
     */
    protected function getTemplatePath()
    {
        return $this->getPathByOptionOrConfig('templatePath', 'repository_template_path');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['repositoryName', InputArgument::REQUIRED, 'The name of the desired repository.']
        ];
    }

} 