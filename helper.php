
function getDateTimeUtcToTimeZone($datetime=null, $format=null, $timezone='UTC'){
    try{
        $format = $format??'d M, Y H:i:s';
        $parseTime = \Carbon\Carbon::parse($datetime, 'UTC');
        return $parseTime->timezone($timezone)->format($format);
    }catch(\Exception $e){
        throw new ErrorException($e);
    }
}
return getDateTimeUtcToTimeZone(null, 'h:i:s a', 'Asia/Dhaka');
