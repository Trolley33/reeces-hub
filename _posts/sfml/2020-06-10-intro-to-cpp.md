---
title: My Introduction to C++
tags: c++ intro
---

So for the past few weeks I've been diving into C++ in my spare time, trying to figure out how to tame this beast of a language. Everyone knows that it's this super speedy and widely used language, but at the same time it has all this weird spookiness surrounding it. Pointers? Templates? Headers? In the age of JavaScript and Python which are so useful and intuitive languages it begs the question... 

_Why bother with C++ anymore?_

Well that's the question I wanted to get the answer to. C++ has always interested me but even getting past the setup seemed like a giant hurdle.

Take for example the installation process for python:
1. Download the Python installation executable for your system from the [website](https://www.python.org/downloads/).
2. Run the executable and follow installation steps.
3. Done.

To then do anything with Python you can type `python` into the command line or open IDLE to write some code and just run. Simple as that.

"Installing" C++ is... a bit different; because C++ isn't a language you install (behind the scenes neither is Python really, it just seems that way). 

In order to execute the following "Hello World!" example:
```c++
/* helloworld.cpp */
#include <iostream>

int main() {
  std::cout << "Hello World!" << std::endl;
}
```
You must:
1. Find, download, and install a suitable compiler for your system (honestly even just the downloads page for [mingw-w64](http://mingw-w64.org/doku.php/download) had me confused for a while).
2. Add the compiler to your system's path variable.
3. Compile your `helloworld.cpp` file from the command line with `g++ helloworld.cpp`
4. Execute `./a.exe`

A little more tricky, but still not too bad I guess? Coming from a Python/Java start I'm all about [OOP](https://en.wikipedia.org/wiki/Object-oriented_programming) so let's get a class in there. In Java I'd write something like this:

```java
// Person.java
class Person {

  private int age;
  private String name;
  private float height;

  public Person(int _age, String _name, float _height) {
    age = _age;
    name = _name;
    height = _height;
  }

  public void outputName() {
    System.out.println(name);
  }
}
```

So I try to transfer across to C++ using the right syntax:

```c++
// person.cpp

#include <iostream>

class Person {
private:
  int age;
  std::string name;
  float height;

public:
  Person(int _age, std::string _name, float _height) {
    age = _age;
    name = _name;
    height = _height;
  }

  void outputName() {
    std::cout << name << std::endl;
  }
}

int main() {
  Person p(20, "Reece", 1.8288f)
  p.outputName();
}
```

```powershell
# Output
PS C:\Users\reece\Documents\projects\cpp> g++ .\person.cpp
PS C:\Users\reece\Documents\projects\cpp> .\a.exe      
Reece
```

Cool! A refactor here, a few bits and pieces there and it all works. Could it be this easy?

It would not be this easy.

Header files? Linking errors? Adding 15 different flags for compiling? Things got out of hand quickly and I'm still no where near confident with using C++ 'correctly' but I can now at least do stuff I want to do in it.

For a while I've been wanting to create an arcade-esque game about Rock Paper Scissors (idea provided many moons ago by [Kruuxt](https://twitter.com/Kruuxty)) - and I decided I was finally going to give a go using [SFML](https://www.sfml-dev.org/). 

Stay tuned to see my development progress as time goes on.