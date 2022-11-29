<?php declare(strict_types=1);
namespace Service;

class AccessLogService {

    /**
     * @param string $file
     * @param string $key
     * @return void
     */
    public static function plainTextIncrement(string $file,string $key ): void {
        $data_string = file_get_contents( $file );
        $ini_data = parse_ini_string($data_string);
        $ini_data[ $key ] = ( $ini_data[$key] ?? 0 )+1;
        $output = '';
        foreach( $ini_data as $ini_key => $value  ) {
            $output .= "{$ini_key} = {$value}". PHP_EOL;
        }
        file_put_contents( $file, $output);
    }
}
