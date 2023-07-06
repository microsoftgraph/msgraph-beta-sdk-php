<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditUserIdentity extends UserIdentity implements Parsable 
{
    /**
     * Instantiates a new AuditUserIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.auditUserIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditUserIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditUserIdentity {
        return new AuditUserIdentity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'homeTenantId' => fn(ParseNode $n) => $o->setHomeTenantId($n->getStringValue()),
            'homeTenantName' => fn(ParseNode $n) => $o->setHomeTenantName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the homeTenantId property value. For user sign ins, the identifier of the tenant that the user is a member of.
     * @return string|null
    */
    public function getHomeTenantId(): ?string {
        $val = $this->getBackingStore()->get('homeTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeTenantId'");
    }

    /**
     * Gets the homeTenantName property value. For user sign ins, the name of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
     * @return string|null
    */
    public function getHomeTenantName(): ?string {
        $val = $this->getBackingStore()->get('homeTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeTenantName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('homeTenantId', $this->getHomeTenantId());
        $writer->writeStringValue('homeTenantName', $this->getHomeTenantName());
    }

    /**
     * Sets the homeTenantId property value. For user sign ins, the identifier of the tenant that the user is a member of.
     * @param string|null $value Value to set for the homeTenantId property.
    */
    public function setHomeTenantId(?string $value): void {
        $this->getBackingStore()->set('homeTenantId', $value);
    }

    /**
     * Sets the homeTenantName property value. For user sign ins, the name of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
     * @param string|null $value Value to set for the homeTenantName property.
    */
    public function setHomeTenantName(?string $value): void {
        $this->getBackingStore()->set('homeTenantName', $value);
    }

}
