# PHP 8.2 vs Python3
My test will consist in downloading a document in JSON format from one data source (from a local file), and then checking:
1. JSON to Object parsing speed
2. The speed with which all elements from the array will be combined using loops and concatenations (I will not use special methods for this)
3. Speed of JSON serialization to a DTO class object
4. Same as 3. except I'll want to get the error and test the speed of the exception handling
5. Speed of deserialization from DTO to JSON and creation of a new JSON document file