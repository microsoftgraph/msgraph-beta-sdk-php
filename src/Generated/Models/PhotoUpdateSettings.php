<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PhotoUpdateSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new PhotoUpdateSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhotoUpdateSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhotoUpdateSettings {
        return new PhotoUpdateSettings();
    }

    /**
     * Gets the allowedRoles property value. Contains a list of roles to perform edit operations in the cloud. Optional.
     * @return array<string>|null
    */
    public function getAllowedRoles(): ?array {
        $val = $this->getBackingStore()->get('allowedRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedRoles'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedRoles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedRoles($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedRoles', $this->getAllowedRoles());
    }

    /**
     * Sets the allowedRoles property value. Contains a list of roles to perform edit operations in the cloud. Optional.
     * @param array<string>|null $value Value to set for the allowedRoles property.
    */
    public function setAllowedRoles(?array $value): void {
        $this->getBackingStore()->set('allowedRoles', $value);
    }

}
