<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantCustomizedInformation extends Entity implements Parsable 
{
    /**
     * Instantiates a new TenantCustomizedInformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantCustomizedInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantCustomizedInformation {
        return new TenantCustomizedInformation();
    }

    /**
     * Gets the businessRelationship property value. Describes the relationship between the Managed Services Provider and the managed tenant; for example, Managed, Co-managed, Licensing. The maximum length is 250 characters. Optional.
     * @return string|null
    */
    public function getBusinessRelationship(): ?string {
        $val = $this->getBackingStore()->get('businessRelationship');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessRelationship'");
    }

    /**
     * Gets the complianceRequirements property value. Contains the compliance requirements for the customer tenant; for example, HIPPA, NIST, CMMC. The maximum length is 250 characters per compliance requirement. Optional.
     * @return array<string>|null
    */
    public function getComplianceRequirements(): ?array {
        $val = $this->getBackingStore()->get('complianceRequirements');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceRequirements'");
    }

    /**
     * Gets the contacts property value. The collection of contacts for the managed tenant. Optional.
     * @return array<TenantContactInformation>|null
    */
    public function getContacts(): ?array {
        $val = $this->getBackingStore()->get('contacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TenantContactInformation::class);
            /** @var array<TenantContactInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contacts'");
    }

    /**
     * Gets the displayName property value. The display name for the managed tenant. Required. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'businessRelationship' => fn(ParseNode $n) => $o->setBusinessRelationship($n->getStringValue()),
            'complianceRequirements' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setComplianceRequirements($val);
            },
            'contacts' => fn(ParseNode $n) => $o->setContacts($n->getCollectionOfObjectValues([TenantContactInformation::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'managedServicesPlans' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setManagedServicesPlans($val);
            },
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'noteLastModifiedDateTime' => fn(ParseNode $n) => $o->setNoteLastModifiedDateTime($n->getDateTimeValue()),
            'partnerRelationshipManagerUserIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPartnerRelationshipManagerUserIds($val);
            },
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedServicesPlans property value. This is the Managed Services Plans for the customer tenant that the Managed Services Provider manages. The maximum length is 250 characters per managed service plan. Optional.
     * @return array<string>|null
    */
    public function getManagedServicesPlans(): ?array {
        $val = $this->getBackingStore()->get('managedServicesPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedServicesPlans'");
    }

    /**
     * Gets the note property value. A field for the Managed Services Provider technician to input custom text to share notes between technicians within the Managed Service Providers. The maximum length is 5000 characters. Optional.
     * @return string|null
    */
    public function getNote(): ?string {
        $val = $this->getBackingStore()->get('note');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'note'");
    }

    /**
     * Gets the noteLastModifiedDateTime property value. The date on which the note field of this entity was last modified. Optional.
     * @return DateTime|null
    */
    public function getNoteLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('noteLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noteLastModifiedDateTime'");
    }

    /**
     * Gets the partnerRelationshipManagerUserIds property value. The list of Entra user IDs for users in the Managed Services Provider that manage the relationship with the managed tenant. Optional.
     * @return array<string>|null
    */
    public function getPartnerRelationshipManagerUserIds(): ?array {
        $val = $this->getBackingStore()->get('partnerRelationshipManagerUserIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerRelationshipManagerUserIds'");
    }

    /**
     * Gets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the website property value. The website for the managed tenant. Required.
     * @return string|null
    */
    public function getWebsite(): ?string {
        $val = $this->getBackingStore()->get('website');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'website'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('businessRelationship', $this->getBusinessRelationship());
        $writer->writeCollectionOfPrimitiveValues('complianceRequirements', $this->getComplianceRequirements());
        $writer->writeCollectionOfObjectValues('contacts', $this->getContacts());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('managedServicesPlans', $this->getManagedServicesPlans());
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeDateTimeValue('noteLastModifiedDateTime', $this->getNoteLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('partnerRelationshipManagerUserIds', $this->getPartnerRelationshipManagerUserIds());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('website', $this->getWebsite());
    }

    /**
     * Sets the businessRelationship property value. Describes the relationship between the Managed Services Provider and the managed tenant; for example, Managed, Co-managed, Licensing. The maximum length is 250 characters. Optional.
     * @param string|null $value Value to set for the businessRelationship property.
    */
    public function setBusinessRelationship(?string $value): void {
        $this->getBackingStore()->set('businessRelationship', $value);
    }

    /**
     * Sets the complianceRequirements property value. Contains the compliance requirements for the customer tenant; for example, HIPPA, NIST, CMMC. The maximum length is 250 characters per compliance requirement. Optional.
     * @param array<string>|null $value Value to set for the complianceRequirements property.
    */
    public function setComplianceRequirements(?array $value): void {
        $this->getBackingStore()->set('complianceRequirements', $value);
    }

    /**
     * Sets the contacts property value. The collection of contacts for the managed tenant. Optional.
     * @param array<TenantContactInformation>|null $value Value to set for the contacts property.
    */
    public function setContacts(?array $value): void {
        $this->getBackingStore()->set('contacts', $value);
    }

    /**
     * Sets the displayName property value. The display name for the managed tenant. Required. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the managedServicesPlans property value. This is the Managed Services Plans for the customer tenant that the Managed Services Provider manages. The maximum length is 250 characters per managed service plan. Optional.
     * @param array<string>|null $value Value to set for the managedServicesPlans property.
    */
    public function setManagedServicesPlans(?array $value): void {
        $this->getBackingStore()->set('managedServicesPlans', $value);
    }

    /**
     * Sets the note property value. A field for the Managed Services Provider technician to input custom text to share notes between technicians within the Managed Service Providers. The maximum length is 5000 characters. Optional.
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->getBackingStore()->set('note', $value);
    }

    /**
     * Sets the noteLastModifiedDateTime property value. The date on which the note field of this entity was last modified. Optional.
     * @param DateTime|null $value Value to set for the noteLastModifiedDateTime property.
    */
    public function setNoteLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('noteLastModifiedDateTime', $value);
    }

    /**
     * Sets the partnerRelationshipManagerUserIds property value. The list of Entra user IDs for users in the Managed Services Provider that manage the relationship with the managed tenant. Optional.
     * @param array<string>|null $value Value to set for the partnerRelationshipManagerUserIds property.
    */
    public function setPartnerRelationshipManagerUserIds(?array $value): void {
        $this->getBackingStore()->set('partnerRelationshipManagerUserIds', $value);
    }

    /**
     * Sets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the website property value. The website for the managed tenant. Required.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->getBackingStore()->set('website', $value);
    }

}
