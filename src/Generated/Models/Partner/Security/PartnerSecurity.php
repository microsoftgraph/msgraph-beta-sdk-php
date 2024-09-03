<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerSecurity extends Entity implements Parsable 
{
    /**
     * Instantiates a new PartnerSecurity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerSecurity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerSecurity {
        return new PartnerSecurity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'securityAlerts' => fn(ParseNode $n) => $o->setSecurityAlerts($n->getCollectionOfObjectValues([PartnerSecurityAlert::class, 'createFromDiscriminatorValue'])),
            'securityScore' => fn(ParseNode $n) => $o->setSecurityScore($n->getObjectValue([PartnerSecurityScore::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the securityAlerts property value. The security alerts or a vulnerability of a Cloud Solution Provider (CSP) partner's customer that the partner must be made aware of for further action.
     * @return array<PartnerSecurityAlert>|null
    */
    public function getSecurityAlerts(): ?array {
        $val = $this->getBackingStore()->get('securityAlerts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PartnerSecurityAlert::class);
            /** @var array<PartnerSecurityAlert>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityAlerts'");
    }

    /**
     * Gets the securityScore property value. The security score calculated for the CSP partner and their customers.
     * @return PartnerSecurityScore|null
    */
    public function getSecurityScore(): ?PartnerSecurityScore {
        $val = $this->getBackingStore()->get('securityScore');
        if (is_null($val) || $val instanceof PartnerSecurityScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityScore'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('securityAlerts', $this->getSecurityAlerts());
        $writer->writeObjectValue('securityScore', $this->getSecurityScore());
    }

    /**
     * Sets the securityAlerts property value. The security alerts or a vulnerability of a Cloud Solution Provider (CSP) partner's customer that the partner must be made aware of for further action.
     * @param array<PartnerSecurityAlert>|null $value Value to set for the securityAlerts property.
    */
    public function setSecurityAlerts(?array $value): void {
        $this->getBackingStore()->set('securityAlerts', $value);
    }

    /**
     * Sets the securityScore property value. The security score calculated for the CSP partner and their customers.
     * @param PartnerSecurityScore|null $value Value to set for the securityScore property.
    */
    public function setSecurityScore(?PartnerSecurityScore $value): void {
        $this->getBackingStore()->set('securityScore', $value);
    }

}
