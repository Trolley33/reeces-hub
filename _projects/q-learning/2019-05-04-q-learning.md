---
layout: article
title: "Q-Learning: Connected Rooms"
lightbox: true
cover: /assets/images/projects/q-learning-cover.gif
---
### Project Info
![Q-Learning Demonstration](/assets/images/projects/q-learning-cover.gif)

- **Language**: Java
- **Framework**: Processing
- **Github**: [Q-Learning Demonstration](https://github.com/Trolley33/connected-rooms-qlearning)

### About
I went about making this from [this](http://mnemstudio.org/path-finding-q-learning-tutorial.htm) tutorial on QLearning. 
By using processing for graphics, this implementaion attempts to show how a system can learn from it's environment. 

The 'node' system is fairly customisable from the provided 'data.json' file. 
This has information about:
- All the nodes to be rendered by the system `nodes`.
- The memory state of the AI when last saved (every 10 episodes by default) `q_table`.
- A list of the connections between nodes `connections`.
- A list of nodes to mark as punishing `bad_nodes`.

The program also allows you to drag and drop nodes so you don't need to specify their positions in the file.
Ideally I'd like to make creating, connecting, and marking nodes also interactive from within the program.

Speeding up the learning is done using +/-, and # takes you back to default speed.

Some of the code is probably not super efficient due to lots of ArrayList's and loops but it's the best I could do in one go!

### Downloads
- All the source code is downloadable from my [Github](https://github.com/Trolley33/connected-rooms-qlearning), which can be run as long as you have processing installed.