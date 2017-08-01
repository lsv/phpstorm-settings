/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 *
 * @return $this
 */
public ${STATIC} function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
    return self;
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
    return $this;
#end
}
