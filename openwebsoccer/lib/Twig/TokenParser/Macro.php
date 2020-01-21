<?php

/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information,please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Defines a macro.
 *
 * <pre>
 * {% macro input(name,value,type,size) %}
 *    <input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />
 * {% endmacro %}
 * </pre>
 */
class Twig_TokenParser_Macro extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $lineno = $token->getLine();
        $stream = $this->parser->getStream();
        $name = $stream->expect(Twig_Token::NAME_TYPE)->getValue();

        $arguments = $this->parser->getExpressionParser()->parseArguments(true,true);

        $stream->expect(Twig_Token::BLOCK_END_TYPE);
        $this->parser->pushLocalScope();
        $body = $this->parser->subparse(array($this,'decideBlockEnd'),true);
        if ($token = $stream->nextIf(Twig_Token::NAME_TYPE)) {
            $value = $token->getValue();

            if ($value != $name) {
                throw new Twig_Error_Syntax(sprintf('Expected endmacro for macro "%s" (but "%s" given).',$name,$value),$stream->getCurrent()->getLine(),$stream->getFilename());
            }
        }
        $this->parser->popLocalScope();
        $stream->expect(Twig_Token::BLOCK_END_TYPE);
        
        // Start: Settings f�r Makros im OpenWebsoccer
        // macros d�rfen nur einmal in der macro.twig hinterlegt sein, sonst muss das macro im Twig-Template integriert sein.
        // macro.twig f�r den Check setzen
		$filename = '../../../../cache/macro.twig';
		if (file_exists($filename)) {
    		// verhindert das die macro.twig zigmal als mac....tmp als Node erstellt wird, indem der Verweis auf macro.twig zeigt
        	$this->parser->setMacro($name);
		}
		else {
	 		// falls die macro.tig nicht als PHP-Datei erstellt wurde muss die folgende Zeile einmalig ausgef�hrt werden
        	$this->parser->setMacro($name,new Twig_Node_Macro($name,new Twig_Node_Body(array($body)),$arguments,$lineno,$this->getTag()));
		}
		// End: Settigs f�r Makros im OpenWebsoccer by Rolf Joseph / ErdemCan
    }

    public function decideBlockEnd(Twig_Token $token)
    {
        return $token->test('endmacro');
    }

    public function getTag()
    {
        return 'macro';
    }
}