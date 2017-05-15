<?php
namespace State;

/**
 * 农民类
 */
class Farmer
{
    private $_curSeason;

    private $_seasons = array(
        'spring',
        'summer',
        'autumn',
        'winter'
    );

    private $_state;

    function __construct($curSession = '')
    {
        $this->_curSeason = $curSession ? $curSession : $this->_seasons[0];
        $this->_setState($this->_curSeason);
    }

    function grow()
    {
        $this->_state->grow();
    }

    function harvest()
    {
        $this->_state->harvest();
        $this->_nextSeason();
    }

    private function _setState($currentSeason)
    {
        switch ($currentSeason) {
            case $this->_seasons[0]:
                $this->_state = new FarmSpring();
                break;
            case $this->_seasons[1]:
                $this->_state = new FarmSummer();
                break;
            case $this->_seasons[2]:
                $this->_state = new FarmAutumn();
                break;
            case $this->_seasons[3]:
                $this->_state = new FarmWinter();
                break;
        }
    }

    private function _nextSeason()
    {
        $nowKey = array_search($this->_curSeason, $this->_seasons);
        if ($nowKey < count($this->_seasons) - 1) {
            $nowKey++;
        } else {
            $nowKey = 0;
        }

        $this->_curSeason = $this->_seasons[$nowKey];
        $this->_setState($this->_curSeason);
    }
}