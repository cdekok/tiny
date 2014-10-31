Apache 2 & PHP 5.6

1.000 Requests (50 concurrent)

- PHP **0.868** Seconds
- Zephir **0.371** Seconds

100.000 Requests (50 Concurrent)

- PHP **102.113** Seconds
- Zephir **41.956** Seconds


PHP**strong text**

1000 Requests

- Concurrency Level:      50
- Time taken for tests:   0.868 seconds
- Complete requests:      1000
- Failed requests:        0
- Total transferred:      219000 bytes
- HTML transferred:       17000 bytes
- Requests per second:    1152.05 [#/sec] (mean)
- Time per request:       43.401 [ms] (mean)
- Time per request:       0.868 [ms] (mean, across all concurrent requests)

100000 request

- Concurrency Level:      50
- Time taken for tests:   102.113 seconds
- Complete requests:      100000
- Failed requests:        0
- Total transferred:      21900000 bytes
- HTML transferred:       1700000 bytes
- Requests per second:    979.31 [#/sec] (mean)
- Time per request:       51.056 [ms] (mean)
- Time per request:       1.021 [ms] (mean, across all concurrent requests)

**Zephir**

1000

- Concurrency Level:      50
- Time taken for tests:   0.371 seconds
- Complete requests:      1000
- Failed requests:        0
- Total transferred:      953000 bytes
- HTML transferred:       727000 bytes
- Requests per second:    2693.13 [#/sec] (mean)
- Time per request:       18.566 [ms] (mean)
- Time per request:       0.371 [ms] (mean, across all concurrent requests)

100000

- Concurrency Level:      50
- Time taken for tests:   41.956 seconds
- Complete requests:      100000
- Failed requests:        0
- Total transferred:      95300000 bytes
- HTML transferred:       72700000 bytes
- Requests per second:    2383.47 [#/sec] (mean)
- Time per request:       20.978 [ms] (mean)
- Time per request:       0.420 [ms] (mean, across all concurrent requests)

