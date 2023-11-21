<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class GcpRole extends Entity implements Parsable 
{
    /**
     * Instantiates a new gcpRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GcpRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GcpRole {
        return new GcpRole();
    }

    /**
     * Gets the displayName property value. The name of the GCP role. Supports $filter and (eq,contains).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalId property value. The ID of the GCP role as defined by GCP. Alternate key.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'gcpRoleType' => fn(ParseNode $n) => $o->setGcpRoleType($n->getEnumValue(GcpRoleType::class)),
            'scopes' => fn(ParseNode $n) => $o->setScopes($n->getCollectionOfObjectValues([GcpScope::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the gcpRoleType property value. The gcpRoleType property
     * @return GcpRoleType|null
    */
    public function getGcpRoleType(): ?GcpRoleType {
        $val = $this->getBackingStore()->get('gcpRoleType');
        if (is_null($val) || $val instanceof GcpRoleType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gcpRoleType'");
    }

    /**
     * Gets the scopes property value. Resources that an identity assigned this GCP role can perform actions on. Supports $filter and (eq).
     * @return array<GcpScope>|null
    */
    public function getScopes(): ?array {
        $val = $this->getBackingStore()->get('scopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GcpScope::class);
            /** @var array<GcpScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeEnumValue('gcpRoleType', $this->getGcpRoleType());
        $writer->writeCollectionOfObjectValues('scopes', $this->getScopes());
    }

    /**
     * Sets the displayName property value. The name of the GCP role. Supports $filter and (eq,contains).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. The ID of the GCP role as defined by GCP. Alternate key.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the gcpRoleType property value. The gcpRoleType property
     * @param GcpRoleType|null $value Value to set for the gcpRoleType property.
    */
    public function setGcpRoleType(?GcpRoleType $value): void {
        $this->getBackingStore()->set('gcpRoleType', $value);
    }

    /**
     * Sets the scopes property value. Resources that an identity assigned this GCP role can perform actions on. Supports $filter and (eq).
     * @param array<GcpScope>|null $value Value to set for the scopes property.
    */
    public function setScopes(?array $value): void {
        $this->getBackingStore()->set('scopes', $value);
    }

}
