// system/library/template/Twig/Lexer.php line 163
if (isset($this->positions[2][$this->position][0])) {
    if ($this->options['whitespace_trim'] === $this->positions[2][$this->position][0]) {
    // whitespace_trim detected ({%-, {{- or {#-)
    $text = rtrim($text);
    } elseif ($this->options['whitespace_trim'] === $this->positions[2][$this->position][0]) {
    // whitespace_trim detected ({%~, {{~ or {#~)
    // don't trim \r and \n
    $text = rtrim($text, " \t\0\x0B");
    }
}
