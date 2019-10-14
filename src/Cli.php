<?php
namespace BracesString\Cli;

use \Docopt;
use function BracesString\GenBracesString\genString;

const DOC = <<<DOC
Usage:
  bin/getBracesString (-h|--help)
  bin/getBracesString <bracesCount>

Options:
  -h --help     	Show this screen

DOC;

function run()
{
    $handle = Docopt::handle(DOC);
    $bracesCount = $handle->args['<bracesCount>'];
    echo genString($bracesCount);
}
