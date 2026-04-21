## Fork (redcuillin)

PEAR [Validate_ISPN](https://pear.php.net/package/Validate_ISPN) fork for continued use with current PHP versions and Composer.

### Using this fork with Composer

Add the following to your `composer.json` `repositories` and `require` sections (merge with existing entries as needed):

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/redcuillin/Validate_ISPN"
    }
],
"require": {
    "pear/validate_ispn": "dev-master as 2.999.0"
}
```

-----

## Upstream readme:

This package is [Validate_ISPN](http://pear.php.net/package/Validate_ISPN) from PEAR.

**Summary:** Validation class for ISPN (International Standard Product Numbers).

**Description:** Package containes ISPN (International Standard Product Numbers) validations such as:

- ISSN
- ISBN
- ISMN
- ISRC (International Standard Recording Code)
- EAN8
- EAN13
- EAN14
- UCC12
- SSCC

Please report upstream issues via the PEAR bug tracker linked from the package page.
