# GTS_TEST

# Wales University Entrance Exam

## Overview
The entrance exam for Wales University assesses overall abilities through a two-stage selection process. The exam includes five subjects: English, Mathematics, Science, Urdu, and Geography/History, each with a maximum score of 100 points.

### Selection Criteria
- **Total Score**: A minimum of 350 points across all subjects.
- **Science Applicants**:
    - A minimum of 160 points combined in Mathematics and Science.
- **Humanities Applicants**:
    - A minimum of 160 points combined in Urdu and Geography/History.

### Example
- Examinee 1 (Science) scores 70 in English, 78 in Math, 82 in Science, 57 in Urdu, and 74 in Geography/History, totaling 361. They pass.
- Examinee 2 (Humanities) scores 68 in English, 81 in Math, 81 in Science, 60 in Urdu, and 78 in Geography/History, totaling 368. They fail due to insufficient points in humanities subjects.

## Input Format
- First line: An integer `N` representing the number of examinees.
- Next `N` lines: Each line contains a classification letter (`l` for humanities, `s` for science), followed by integers representing scores in English, Mathematics, Science, Urdu, and Geography/History.

### Example
```
5
s 70 78 82 57 74
l 68 81 81 60 78
s 63 76 55 80 75
s 90 100 96 10 10
l 88 78 81 97 93
```

## Output Format
Print the number of applicants who pass the two-stage selection as an integer.

### Example Output for Above Input
```
2
```

## Additional Test Case

### Input Example 2
```
20
l 100 67 39 85 87
s 38 75 75 45 90
l 43 95 7 35 49
l 82 77 74 35 44
s 96 80 92 58 84
l 23 60 44 27 3
l 42 24 52 23 63
s 44 78 98 51 10
l 93 38 73 88 12
l 34 29 43 48 61
l 83 33 97 3 59
l 24 84 22 35 33
s 81 42 80 34 87
l 8 87 82 80 100
l 48 75 75 3 50
l 93 76 25 71 31
s 60 92 64 66 11
l 61 47 6 21 83
l 68 1 47 81 78
l 8 72 54 20 25
```

### Output Example 2
```
3
```