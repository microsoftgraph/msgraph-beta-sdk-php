<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents an iOS Web Content Filter setting type, which enables iOS automatic filter feature and allows for additional URL access control. When constructed with no property values, the iOS device will enable the automatic filter regardless.
*/
class IosWebContentFilterAutoFilter extends IosWebContentFilterBase implements Parsable 
{
    /**
     * Instantiates a new iosWebContentFilterAutoFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosWebContentFilterAutoFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosWebContentFilterAutoFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosWebContentFilterAutoFilter {
        return new IosWebContentFilterAutoFilter();
    }

    /**
     * Gets the allowedUrls property value. Additional URLs allowed for access
     * @return array<string>|null
    */
    public function getAllowedUrls(): ?array {
        $val = $this->getBackingStore()->get('allowedUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedUrls'");
    }

    /**
     * Gets the blockedUrls property value. Additional URLs blocked for access
     * @return array<string>|null
    */
    public function getBlockedUrls(): ?array {
        $val = $this->getBackingStore()->get('blockedUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockedUrls'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedUrls($val);
            },
            'blockedUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBlockedUrls($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedUrls', $this->getAllowedUrls());
        $writer->writeCollectionOfPrimitiveValues('blockedUrls', $this->getBlockedUrls());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the allowedUrls property value. Additional URLs allowed for access
     * @param array<string>|null $value Value to set for the allowedUrls property.
    */
    public function setAllowedUrls(?array $value): void {
        $this->getBackingStore()->set('allowedUrls', $value);
    }

    /**
     * Sets the blockedUrls property value. Additional URLs blocked for access
     * @param array<string>|null $value Value to set for the blockedUrls property.
    */
    public function setBlockedUrls(?array $value): void {
        $this->getBackingStore()->set('blockedUrls', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
