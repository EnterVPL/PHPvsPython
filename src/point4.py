import point1
import point3

codeTimer = point1.CodeTimer("Point 4")
codeTimer.start()

otherUsersDto = point3.UsersDto()
try:
    for user in point1.data.users:
        userDto = point3.UserDto(user['id'], user['description'])
        raise NameError('My bad!')
except NameError as e:
    print(e)


codeTimer.stop()
print(f'{codeTimer.result()}')

