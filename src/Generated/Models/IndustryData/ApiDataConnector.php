<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApiDataConnector extends IndustryDataConnector implements Parsable 
{
    /**
     * Instantiates a new ApiDataConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.apiDataConnector');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiDataConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiDataConnector {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.industryData.oneRosterApiDataConnector': return new OneRosterApiDataConnector();
            }
        }
        return new ApiDataConnector();
    }

    /**
     * Gets the apiFormat property value. The apiFormat property
     * @return ApiFormat|null
    */
    public function getApiFormat(): ?ApiFormat {
        $val = $this->getBackingStore()->get('apiFormat');
        if (is_null($val) || $val instanceof ApiFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiFormat'");
    }

    /**
     * Gets the baseUrl property value. The base URL, including the scheme, host, and path for the API, with or without a trailing '/'. For example, 'https://example.com/ims/oneRoster/v1p1'
     * @return string|null
    */
    public function getBaseUrl(): ?string {
        $val = $this->getBackingStore()->get('baseUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baseUrl'");
    }

    /**
     * Gets the credential property value. The credential property
     * @return Credential|null
    */
    public function getCredential(): ?Credential {
        $val = $this->getBackingStore()->get('credential');
        if (is_null($val) || $val instanceof Credential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credential'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiFormat' => fn(ParseNode $n) => $o->setApiFormat($n->getEnumValue(ApiFormat::class)),
            'baseUrl' => fn(ParseNode $n) => $o->setBaseUrl($n->getStringValue()),
            'credential' => fn(ParseNode $n) => $o->setCredential($n->getObjectValue([Credential::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('apiFormat', $this->getApiFormat());
        $writer->writeStringValue('baseUrl', $this->getBaseUrl());
        $writer->writeObjectValue('credential', $this->getCredential());
    }

    /**
     * Sets the apiFormat property value. The apiFormat property
     * @param ApiFormat|null $value Value to set for the apiFormat property.
    */
    public function setApiFormat(?ApiFormat $value): void {
        $this->getBackingStore()->set('apiFormat', $value);
    }

    /**
     * Sets the baseUrl property value. The base URL, including the scheme, host, and path for the API, with or without a trailing '/'. For example, 'https://example.com/ims/oneRoster/v1p1'
     * @param string|null $value Value to set for the baseUrl property.
    */
    public function setBaseUrl(?string $value): void {
        $this->getBackingStore()->set('baseUrl', $value);
    }

    /**
     * Sets the credential property value. The credential property
     * @param Credential|null $value Value to set for the credential property.
    */
    public function setCredential(?Credential $value): void {
        $this->getBackingStore()->set('credential', $value);
    }

}
