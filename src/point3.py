import point1

class UsersDto:
    users = []

    def __init__(self):
        self

    def appendUser(self, user):
        self.users.append(user)

class UserDto:
    id = 0
    description = ""

    def __init__(self, id, description):
        self.id = id
        self.description = description

codeTimer = point1.CodeTimer("Point 3")
codeTimer.start()

usersDto = UsersDto()

for user in point1.data.users:
    userDto = UserDto(user['id'], user['description'])
    usersDto.appendUser(userDto)

codeTimer.stop()
print(f'{codeTimer.result()}')

