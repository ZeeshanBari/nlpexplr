# this file is automatically run when changes are pushed to repo
def inc(x):
    return x + 1


def test_answer():
    assert inc(3) == 4