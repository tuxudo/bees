<?php 

/**
 * bees module class
 *
 * @package munkireport
 * @author tuxudo
 **/
class Bees_controller extends Module_controller
{
	
	/*** Protect methods with auth! ****/
	function __construct()
	{
		// Store module path
		$this->module_path = dirname(__FILE__);
	}

	/**
	 * Default method
	 * @author tuxudo
	 *
	 **/
	function index()
	{
		echo "You've loaded the 🐝 module!";
	}
	
	/**
	 * Retrieve data in json format
	 *
	 **/
	public function get_bee_fact()
	{

		$bee_facts = array(
"Bees have 5 eyes and can see in the ultraviolet spectrum",
"Bees are insects, so they have 6 legs",
"Male bees in the hive are called drones",
"Bees can fly about 15 mph or 24 kmh",
"Female bees in the hive (except the queen) are called worker bees",
"Number of eggs laid by queen: 2,000 per day is the high or 800,000 eggs in her lifetime",
"Losing its stinger will cause a bee to die",
"Bees have been here about 30 million years!",
"Bees carry pollen on their hind legs in a pollen basket or corbicula",
"An average beehive can hold around 50,000 bees",
"Foragers must collect nectar from about 2 million flowers to make 1 pound of honey",
"The average forager makes about 1/12 th of a teaspoon of honey in her lifetime",
"Average per capita honey consumption in the US is 1.3 pounds",
"Bees have 2 pairs of wings. The two wings each side hook together to form one larger pair when flying and then unhook when they’re not flying",
"The principal form of communication among honey bees is through chemicals called pheromones",
"Social bees, such as honeybees and bumblebees, often live in hives or nests, above or below the ground, while most solitary bees nest in the ground",
"Bees can be found in so many locations such as marshes, shingle, sand dunes, soft cliffs, heathlands, wetlands, chalk grasslands, quarries, gravel pits, sea walls and even post-industrial land",
"If you find a bumblebee which appears to be struggling, it may be that it is just resting, particularly if the bee is a queen in early spring. If you think the bee is struggling the best thing to do is gently put the bee onto a bee-friendly flower",
"Honeybees have a dance move called the ‘waggle dance’. It’s not actually a dance move at all, rather a clever way of communicating between themselves to tell their nestmates where to go to find the best source of food",
"The buff-tailed bumblebee has a brain the size of a poppy seed. Which is incredible given the fact scientists have managed to train them to score a goal in ‘bee football’ in return for a sugary treat",
"If the queen bee dies in a honeybee hive the workers can create a new queen bee. They do this by selecting a young larva and by feeding it special food called ‘royal jelly’ the larva will develop into a fertile queen",
"Bees maintain a temperature of 92-93 degrees Fahrenheit in their central brood nest regardless of whether the outside temperature is 110 or -40 degrees",
"Worker honey bees live for about 4 weeks in the spring or summer but up to 6 months during the winter",
"The honey bee is the only insect that produces food eaten by humans",
"A honey bee can fly for up to six miles, and as fast as 15 miles per hour, hence it would have to fly around 90,000 miles -three times around the globe – to make one pound of honey",
"It takes one ounce of honey to fuel a bee’s flight around the world",
"Honey bees produce beeswax from eight paired glands on the underside of their abdomen",
"Honey bees must consume about 17-20 pounds of honey to be able to biochemically produce each pound of beeswax",
"A populous colony may contain 40,000 to 60,000 bees during the late spring or early summer",
"The queen may mate with up to 17 drones over a 1-2 day period of mating",
"The Honey bee’s wings stroke 11,400 times per minute, thus making their distinctive buzz",
"A honey bee visits 50 to 100 flowers during a collection trip",
"Fermented honey, known as Mead, is the most ancient fermented beverage. The term “honey moon” originated with the Norse practice of consuming large quantities of Mead during the first month of a marriage"
		);

        jsonView([0 => ["fact"=>$bee_facts[array_rand($bee_facts, 1)]]]);
	}

} // END class Bees_controller
