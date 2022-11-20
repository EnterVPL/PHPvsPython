import point1

class Sentence:
    _data = ""

    def __init__(self):
        self

    def concat(self, data):
        self._data += data
    
    def __str__(self):
        return self._data

codeTimer = point1.CodeTimer("Point 2")
codeTimer.start()

sentence = Sentence()

for user in point1.data.users:
    for word in user['description']:
        sentence.concat(word)

codeTimer.stop()
print(f'{codeTimer.result()}')
print(len(sentence.__str__()))
