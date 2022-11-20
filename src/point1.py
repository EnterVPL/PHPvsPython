import time
import pandas as ps


class CodeTimer:
    _timeStart = 0.0
    _timeStop = 0.0
    _id = ""

    def __init__(self, id):
        self.id = id

    def start(self):
        self._timeStart = time.time()
    
    def stop(self):
        self._timeStop = time.time()

    def result(self):
        timeDiff = self._timeStop - self._timeStart
        return f'{self.id}: {timeDiff} sek'

codeTimer = CodeTimer("Point 1")
codeTimer.start()

data = ps.read_json("data/data.json")

codeTimer.stop()
print(f'{codeTimer.result()}')
