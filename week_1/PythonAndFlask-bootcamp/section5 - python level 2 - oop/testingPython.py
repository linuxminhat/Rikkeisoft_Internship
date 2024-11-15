#write program to find LCM between two number
import math
def lcm(a, b):
    lcm_val = abs(a * b) // math.gcd(a, b)
    return lcm_val

# Test the function