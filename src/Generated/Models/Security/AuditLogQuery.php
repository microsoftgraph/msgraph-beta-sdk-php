<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuditLogQuery extends Entity implements Parsable 
{
    /**
     * Instantiates a new auditLogQuery and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditLogQuery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditLogQuery {
        return new AuditLogQuery();
    }

    /**
     * Gets the administrativeUnitIdFilters property value. The administrativeUnitIdFilters property
     * @return array<string>|null
    */
    public function getAdministrativeUnitIdFilters(): ?array {
        $val = $this->getBackingStore()->get('administrativeUnitIdFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'administrativeUnitIdFilters'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'administrativeUnitIdFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdministrativeUnitIdFilters($val);
            },
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'filterEndDateTime' => fn(ParseNode $n) => $o->setFilterEndDateTime($n->getDateTimeValue()),
            'filterStartDateTime' => fn(ParseNode $n) => $o->setFilterStartDateTime($n->getDateTimeValue()),
            'ipAddressFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIpAddressFilters($val);
            },
            'keywordFilter' => fn(ParseNode $n) => $o->setKeywordFilter($n->getStringValue()),
            'objectIdFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setObjectIdFilters($val);
            },
            'operationFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOperationFilters($val);
            },
            'records' => fn(ParseNode $n) => $o->setRecords($n->getCollectionOfObjectValues([AuditLogRecord::class, 'createFromDiscriminatorValue'])),
            'recordTypeFilters' => fn(ParseNode $n) => $o->setRecordTypeFilters($n->getCollectionOfEnumValues(AuditLogQuery_recordTypeFilters::class)),
            'serviceFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setServiceFilters($val);
            },
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AuditLogQuery_status::class)),
            'userPrincipalNameFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUserPrincipalNameFilters($val);
            },
        ]);
    }

    /**
     * Gets the filterEndDateTime property value. The filterEndDateTime property
     * @return DateTime|null
    */
    public function getFilterEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('filterEndDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filterEndDateTime'");
    }

    /**
     * Gets the filterStartDateTime property value. The filterStartDateTime property
     * @return DateTime|null
    */
    public function getFilterStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('filterStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filterStartDateTime'");
    }

    /**
     * Gets the ipAddressFilters property value. The ipAddressFilters property
     * @return array<string>|null
    */
    public function getIpAddressFilters(): ?array {
        $val = $this->getBackingStore()->get('ipAddressFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddressFilters'");
    }

    /**
     * Gets the keywordFilter property value. The keywordFilter property
     * @return string|null
    */
    public function getKeywordFilter(): ?string {
        $val = $this->getBackingStore()->get('keywordFilter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keywordFilter'");
    }

    /**
     * Gets the objectIdFilters property value. The objectIdFilters property
     * @return array<string>|null
    */
    public function getObjectIdFilters(): ?array {
        $val = $this->getBackingStore()->get('objectIdFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectIdFilters'");
    }

    /**
     * Gets the operationFilters property value. The operationFilters property
     * @return array<string>|null
    */
    public function getOperationFilters(): ?array {
        $val = $this->getBackingStore()->get('operationFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationFilters'");
    }

    /**
     * Gets the records property value. The records property
     * @return array<AuditLogRecord>|null
    */
    public function getRecords(): ?array {
        $val = $this->getBackingStore()->get('records');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuditLogRecord::class);
            /** @var array<AuditLogRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'records'");
    }

    /**
     * Gets the recordTypeFilters property value. The recordTypeFilters property
     * @return array<AuditLogQuery_recordTypeFilters>|null
    */
    public function getRecordTypeFilters(): ?array {
        $val = $this->getBackingStore()->get('recordTypeFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuditLogQuery_recordTypeFilters::class);
            /** @var array<AuditLogQuery_recordTypeFilters>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordTypeFilters'");
    }

    /**
     * Gets the serviceFilters property value. The serviceFilters property
     * @return array<string>|null
    */
    public function getServiceFilters(): ?array {
        $val = $this->getBackingStore()->get('serviceFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceFilters'");
    }

    /**
     * Gets the status property value. The status property
     * @return AuditLogQuery_status|null
    */
    public function getStatus(): ?AuditLogQuery_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof AuditLogQuery_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userPrincipalNameFilters property value. The userPrincipalNameFilters property
     * @return array<string>|null
    */
    public function getUserPrincipalNameFilters(): ?array {
        $val = $this->getBackingStore()->get('userPrincipalNameFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalNameFilters'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('administrativeUnitIdFilters', $this->getAdministrativeUnitIdFilters());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('filterEndDateTime', $this->getFilterEndDateTime());
        $writer->writeDateTimeValue('filterStartDateTime', $this->getFilterStartDateTime());
        $writer->writeCollectionOfPrimitiveValues('ipAddressFilters', $this->getIpAddressFilters());
        $writer->writeStringValue('keywordFilter', $this->getKeywordFilter());
        $writer->writeCollectionOfPrimitiveValues('objectIdFilters', $this->getObjectIdFilters());
        $writer->writeCollectionOfPrimitiveValues('operationFilters', $this->getOperationFilters());
        $writer->writeCollectionOfObjectValues('records', $this->getRecords());
        $writer->writeCollectionOfEnumValues('recordTypeFilters', $this->getRecordTypeFilters());
        $writer->writeCollectionOfPrimitiveValues('serviceFilters', $this->getServiceFilters());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfPrimitiveValues('userPrincipalNameFilters', $this->getUserPrincipalNameFilters());
    }

    /**
     * Sets the administrativeUnitIdFilters property value. The administrativeUnitIdFilters property
     * @param array<string>|null $value Value to set for the administrativeUnitIdFilters property.
    */
    public function setAdministrativeUnitIdFilters(?array $value): void {
        $this->getBackingStore()->set('administrativeUnitIdFilters', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the filterEndDateTime property value. The filterEndDateTime property
     * @param DateTime|null $value Value to set for the filterEndDateTime property.
    */
    public function setFilterEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('filterEndDateTime', $value);
    }

    /**
     * Sets the filterStartDateTime property value. The filterStartDateTime property
     * @param DateTime|null $value Value to set for the filterStartDateTime property.
    */
    public function setFilterStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('filterStartDateTime', $value);
    }

    /**
     * Sets the ipAddressFilters property value. The ipAddressFilters property
     * @param array<string>|null $value Value to set for the ipAddressFilters property.
    */
    public function setIpAddressFilters(?array $value): void {
        $this->getBackingStore()->set('ipAddressFilters', $value);
    }

    /**
     * Sets the keywordFilter property value. The keywordFilter property
     * @param string|null $value Value to set for the keywordFilter property.
    */
    public function setKeywordFilter(?string $value): void {
        $this->getBackingStore()->set('keywordFilter', $value);
    }

    /**
     * Sets the objectIdFilters property value. The objectIdFilters property
     * @param array<string>|null $value Value to set for the objectIdFilters property.
    */
    public function setObjectIdFilters(?array $value): void {
        $this->getBackingStore()->set('objectIdFilters', $value);
    }

    /**
     * Sets the operationFilters property value. The operationFilters property
     * @param array<string>|null $value Value to set for the operationFilters property.
    */
    public function setOperationFilters(?array $value): void {
        $this->getBackingStore()->set('operationFilters', $value);
    }

    /**
     * Sets the records property value. The records property
     * @param array<AuditLogRecord>|null $value Value to set for the records property.
    */
    public function setRecords(?array $value): void {
        $this->getBackingStore()->set('records', $value);
    }

    /**
     * Sets the recordTypeFilters property value. The recordTypeFilters property
     * @param array<AuditLogQuery_recordTypeFilters>|null $value Value to set for the recordTypeFilters property.
    */
    public function setRecordTypeFilters(?array $value): void {
        $this->getBackingStore()->set('recordTypeFilters', $value);
    }

    /**
     * Sets the serviceFilters property value. The serviceFilters property
     * @param array<string>|null $value Value to set for the serviceFilters property.
    */
    public function setServiceFilters(?array $value): void {
        $this->getBackingStore()->set('serviceFilters', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param AuditLogQuery_status|null $value Value to set for the status property.
    */
    public function setStatus(?AuditLogQuery_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userPrincipalNameFilters property value. The userPrincipalNameFilters property
     * @param array<string>|null $value Value to set for the userPrincipalNameFilters property.
    */
    public function setUserPrincipalNameFilters(?array $value): void {
        $this->getBackingStore()->set('userPrincipalNameFilters', $value);
    }

}
