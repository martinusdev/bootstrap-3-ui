# Bootstrap 3 UI

Transparently use [Bootstrap 3][twbs3] with [CakePHP 3][cakephp].

## Allow usage of bootstrap 3 and 4 in the same project

This repository is in sync with FriendsOfCake/bootstrap-ui 1.x releases and uses another namespace to allow installation of this package for bootstrap 3 and FriendsOfCake/bootstrap-ui 2.x for bootstrap 4 in the same project. 

```
composer require jorisvaesen/bootstrap-3-ui
composer require friendsofcake/bootstrap-ui:2.0.0-beta4
```

[cakephp]:http://cakephp.org
[twbs3]:http://getbootstrap.com

## Usage

The easiest way to use bootstrap 3 and 4 in your CakePHP project is to create an extra AppView for bootstrap 4.

Edit your current AppView.php to start using this package:
```php
// AppView.php

use Bootstrap3UI\View\UIViewTrait;

class AppView extends View
{
    use UIViewTrait;
    
    public function initialize()
    {
    	parent::initialize();
        
        $this->initializeUI();
    }
```
Create an AppView for pages which use bootstrap 4:
```php
// AppView4.php

use BootstrapUI\View\UIViewTrait;

class AppView4 extends View
{
    use UIViewTrait;
    
    public function initialize()
    {
    	parent::initialize();
        
        $this->initializeUI();
    }
```
Load bootstrap 3 or bootstrap 4 helpers through the AppView:
```php
// In any controller initialize() or any action
$this->viewBuilder()
    ->setClassName('App\View\AppView')      // Bootstrap 3
    ->setClassName('App\View\AppView4')     // Bootstrap 4
```
