<?php

namespace App\Views;

/**
 * 
 */
class mainWindow extends \FabulaGTK\Window
{
	/**
	 * 
	 */
	public function initialize()
	{ }

	/**
	 * fecha a janela
	 */
	public function mainWindow_onQuit($window)
	{
		\Gtk::main_quit();
	}
}