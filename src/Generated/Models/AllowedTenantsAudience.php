<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AllowedTenantsAudience extends SignInAudienceRestrictionsBase implements Parsable 
{
    /**
     * Instantiates a new AllowedTenantsAudience and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.allowedTenantsAudience');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AllowedTenantsAudience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AllowedTenantsAudience {
        return new AllowedTenantsAudience();
    }

    /**
     * Gets the allowedTenantIds property value. The list of Entra tenant IDs where the application can be used as either a client application or a resource application (API). Must contain at least one value. The tenant ID where the application is registered may be included, but is not required (see isHomeTenantAllowed). Required.
     * @return array<string>|null
    */
    public function getAllowedTenantIds(): ?array {
        $val = $this->getBackingStore()->get('allowedTenantIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedTenantIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedTenantIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedTenantIds($val);
            },
            'isHomeTenantAllowed' => fn(ParseNode $n) => $o->setIsHomeTenantAllowed($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isHomeTenantAllowed property value. Whether the tenant where the application is registered is allowed. Currently, only true is supported. Default is true.
     * @return bool|null
    */
    public function getIsHomeTenantAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isHomeTenantAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHomeTenantAllowed'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedTenantIds', $this->getAllowedTenantIds());
        $writer->writeBooleanValue('isHomeTenantAllowed', $this->getIsHomeTenantAllowed());
    }

    /**
     * Sets the allowedTenantIds property value. The list of Entra tenant IDs where the application can be used as either a client application or a resource application (API). Must contain at least one value. The tenant ID where the application is registered may be included, but is not required (see isHomeTenantAllowed). Required.
     * @param array<string>|null $value Value to set for the allowedTenantIds property.
    */
    public function setAllowedTenantIds(?array $value): void {
        $this->getBackingStore()->set('allowedTenantIds', $value);
    }

    /**
     * Sets the isHomeTenantAllowed property value. Whether the tenant where the application is registered is allowed. Currently, only true is supported. Default is true.
     * @param bool|null $value Value to set for the isHomeTenantAllowed property.
    */
    public function setIsHomeTenantAllowed(?bool $value): void {
        $this->getBackingStore()->set('isHomeTenantAllowed', $value);
    }

}
