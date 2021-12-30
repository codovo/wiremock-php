<?php

namespace WireMock\Client;

abstract class XmlUnitComparisonType
{
    const ATTR_NAME_LOOKUP = 'ATTR_NAME_LOOKUP';
    const ATTR_VALUE = 'ATTR_VALUE';
    const ATTR_VALUE_EXPLICITLY_SPECIFIED = 'ATTR_VALUE_EXPLICITLY_SPECIFIED';
    const CHILD_LOOKUP = 'CHILD_LOOKUP';
    const CHILD_NODELIST_LENGTH = 'CHILD_NODELIST_LENGTH';
    const CHILD_NODELIST_SEQUENCE = 'CHILD_NODELIST_SEQUENCE';
    const DOCTYPE_NAME = 'DOCTYPE_NAME';
    const DOCTYPE_PUBLIC_ID = 'DOCTYPE_PUBLIC_ID';
    const DOCTYPE_SYSTEM_ID = 'DOCTYPE_SYSTEM_ID';
    const ELEMENT_NUM_ATTRIBUTES = 'ELEMENT_NUM_ATTRIBUTES';
    const ELEMENT_TAG_NAME = 'ELEMENT_TAG_NAME';
    const HAS_DOCTYPE_DECLARATION = 'HAS_DOCTYPE_DECLARATION';
    const NAMESPACE_PREFIX = 'NAMESPACE_PREFIX';
    const NAMESPACE_URI = 'NAMESPACE_URI';
    const NO_NAMESPACE_SCHEMA_LOCATION = 'NO_NAMESPACE_SCHEMA_LOCATION';
    const NODE_TYPE = 'NODE_TYPE';
    const PROCESSING_INSTRUCTION_DATA = 'PROCESSING_INSTRUCTION_DATA';
    const PROCESSING_INSTRUCTION_TARGET = 'PROCESSING_INSTRUCTION_TARGET';
    const SCHEMA_LOCATION = 'SCHEMA_LOCATION';
    const TEXT_VALUE = 'TEXT_VALUE';
    const XML_ENCODING = 'XML_ENCODING';
    const XML_STANDALONE = 'XML_STANDALONE';
    const XML_VERSION = 'XML_VERSION';
}
