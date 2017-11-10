/**
*	@author
*	@date
*	@file Test.hpp
*/

#include "Test.h"

Test::Test() {
	std::cout << "Test suite created" << std::endl;
}

std::string Test::testSearch() {
	std::string message = "";
	std::string thisMethod = "testSearch()";

	LinkedListOfInts testableList;

	// Test that false positive is not thrown on search
	if (testableList.search(1)) {
		message += thisMethod + " Failed to return that value does not reside in list";
		message += "\n";
	}

	testableList.addFront(1);

	// Test that element can be searched for and found in list
	if (!testableList.search(1)) {
		message += thisMethod + " Failed to return that value resides in list";
		message += "\n";
	}

	return message;
}

std::string Test::testSize() {
	std::string message = "";
	std::string thisMethod = "testSize()";

	LinkedListOfInts testableList;

	// Test that empty list can have its size correctly identified
	if (testableList.size() != 0) {
		message += thisMethod + " Failed to identify size of an empty list";
		message += "\n";
	}

	// Test that a list of size 1 can have its size correctly identified
	testableList.addFront(1);
	if (testableList.size() != 1) {
		message += thisMethod + " Failed to identify size of a list with one element";
		message += "\n";
	}

	// Test that a list of size 2 can have its size correctly identified
	testableList.addFront(1);
	if (testableList.size() != 2) {
		message += thisMethod + " Failed to identify size of a list with two elements";
		message += "\n";
	}

	return message;
}

std::string Test::testIsEmpty() {
	std::string message = "";
	std::string thisMethod = "testIsEmpty()";

	LinkedListOfInts testableList;

	// Test that empty list can be correctly identified
	if (!testableList.isEmpty()) {
		message += thisMethod + " Failed to identify an empty list";
		message += "\n";
	}

	// Test that non-empty list can be correctly identified
	testableList.addFront(1);
	if (testableList.isEmpty()) {
		message += thisMethod + " Failed to identify a non-empty list";
		message += "\n";
	}

	return message;
}

std::string Test::testAddFront() {
	std::string message = "";
	std::string thisMethod = "testAddFront()";

	// Test on positive and negative values
	for (int i = -1; i < 2; i++) {

		LinkedListOfInts testableList;
		std::vector<int> expected;

		expected = {i};
		testableList.addFront(i);
		if (testableList.toVector() != expected) {
			message += thisMethod + " Failed to correctly add an element to an empty list";
			message += "\n";
		}

		expected = {i, i};
		testableList.addFront(i);
		if (testableList.toVector() != expected) {
			message += thisMethod + " Failed to correctly add an element to a non-empty list";
			message += "\n";
		}

		expected = {i, i, i};
		testableList.addFront(i);
		if (testableList.toVector() != expected) {
			message += thisMethod + " Failed to correctly add an element to a non-empty list";
			message += "\n";
		}
	}

	return message;
}

std::string Test::testAddBack() {
	std::string message = "";
	std::string thisMethod = "testAddBack()";

	// Test on positive and negative values
	for (int i = -1; i < 2; i++) {

		LinkedListOfInts testableList;
		std::vector<int> expected;

		expected = {i};
		testableList.addBack(i);
		if (testableList.toVector() != expected) {
			message += thisMethod + " Failed to correctly add an element to an empty list";
			message += "\n";
		}

		expected = {i, i};
		testableList.addBack(i);
		if (testableList.toVector() != expected) {
			message += thisMethod + " Failed to correctly add an element to a non-empty list";
			message += "\n";
		}

		expected = {i, i, i};
		testableList.addBack(i);
		if (testableList.toVector() != expected) {
			message += thisMethod + " Failed to correctly add an element to a non-empty list";
			message += "\n";
		}
	}

	return message;
}

std::string Test::testRemoveBack() {
	std::string message = "";
	std::string thisMethod = "testRemoveBack()";

	LinkedListOfInts testableList;

	if (testableList.removeBack()) {
		message += thisMethod + " Failed to indicate that list is empty on attempted removal";
		message += "\n";
	}

	testableList.addFront(1);

	if (!testableList.removeBack()) {
		message += thisMethod + " Failed to indicate that list could succesfully have an element removed";
		message += "\n";
	}

	std::vector<int> expected = {};

	if (testableList.toVector() != expected) {
		message += thisMethod + " Failed to remove element from list";
		message += "\n";
	}

	testableList.addFront(1);
	testableList.addFront(1);

	if (!testableList.removeBack()) {
		message += thisMethod + " Failed to indicate that list could succesfully have an element removed";
		message += "\n";
	}

	expected = {1};

	if (testableList.toVector() != expected) {
		message += thisMethod + " Failed to remove element from list";
		message += "\n";
	}

	return message;
}

std::string Test::testRemoveFront() {
	std::string message = "";
	std::string thisMethod = "testRemoveFront()";

	LinkedListOfInts testableList;

	if (testableList.removeFront()) {
		message += thisMethod + " Failed to indicate that list is empty on attempted removal";
		message += "\n";
	}

	testableList.addFront(1);

	if (!testableList.removeFront()) {
		message += thisMethod + " Failed to indicate that list could succesfully have an element removed";
		message += "\n";
	}

	std::vector<int> expected = {};

	if (testableList.toVector() != expected) {
		message += thisMethod + " Failed to remove element from list";
		message += "\n";
	}

	testableList.addFront(1);
	testableList.addFront(1);

	if (!testableList.removeFront()) {
		message += thisMethod + " Failed to indicate that list could succesfully have an element removed";
		message += "\n";
	}

	expected = {1};

	if (testableList.toVector() != expected) {
		message += thisMethod + " Failed to remove element from list";
		message += "\n";
	}

	return message;
}

void Test::runTests() {
	std::cout << "Running tests..." << std::endl;

	std::cout << testIsEmpty();
	std::cout << testAddFront();
	std::cout << testAddBack();
	std::cout << testRemoveBack();
	std::cout << testRemoveFront();
	std::cout << testSize();
	std::cout << testSearch();
}
