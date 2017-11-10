/**
*	@author
*	@date
*	@brief A header file for templated TestSuite class
*/

#ifndef TEST_H
#define TEST_H

#include <iostream>
#include <vector>
#include "LinkedListOfInts.h"
#include "Test.h"

/**
* Testing suite for the LinkedListofInts class. Methods test a wide variety of
* behavior of each of the LinkedListofInts methods. Each encountered failures
* is returned in a string the testing method.
*/
class Test {
public:

	Test();

	/**
	* Tests behavior of search() method.
	*
	* Returns failures (if any).
	*/
	std::string testSearch();

	/**
	* Tests behavior of size() method.
	*
	* Returns failures (if any).
	*/
	std::string testSize();

	/**
	* Tests behavior of isEmpty() method. Assumes that addFront(...) has been
	* verified to work correctly.
	*
	* Returns failures (if any).
	*/
	std::string testIsEmpty();

	/**
	* Tests behavior of addFront(...) method.
	*
	* Returns failures (if any).
	*/
	std::string testAddFront();

	/**
	* Tests behavior of addBack(...) method.
	*
	* Returns failures (if any).
	*/
	std::string testAddBack();

	/**
	* Tests behavior of removeBack() method. Assumes addFront(...) has been
	* verified to work correctly.
	*
	* Returns failures (if any).
	*/
	std::string testRemoveBack();

	/**
	* Tests behavior of removeFront() method. Assumes addFront(...) has been
	* verified to work correctly.
	*
	* Returns failures (if any).
	*/
	std::string testRemoveFront();

	/**
	* Prints out all failures in testing methods.
	*/
	void runTests();
};

#endif
