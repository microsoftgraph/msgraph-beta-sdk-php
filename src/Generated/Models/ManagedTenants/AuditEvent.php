<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new auditEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditEvent {
        return new AuditEvent();
    }

    /**
     * Gets the activity property value. A string which uniquely represents the operation that occurred. Required. Read-only.
     * @return string|null
    */
    public function getActivity(): ?string {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * Gets the activityDateTime property value. The time when the activity ocurred. Required. Read-only.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDateTime'");
    }

    /**
     * Gets the activityId property value. The identifier of the activity request that made the audit event. Required. Read-only.
     * @return string|null
    */
    public function getActivityId(): ?string {
        $val = $this->getBackingStore()->get('activityId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityId'");
    }

    /**
     * Gets the category property value. A category which represents a logical grouping of activities. Required. Read-only.
     * @return string|null
    */
    public function getCategory(): ?string {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getStringValue()),
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'activityId' => fn(ParseNode $n) => $o->setActivityId($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'httpVerb' => fn(ParseNode $n) => $o->setHttpVerb($n->getStringValue()),
            'initiatedByAppId' => fn(ParseNode $n) => $o->setInitiatedByAppId($n->getStringValue()),
            'initiatedByUpn' => fn(ParseNode $n) => $o->setInitiatedByUpn($n->getStringValue()),
            'initiatedByUserId' => fn(ParseNode $n) => $o->setInitiatedByUserId($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'requestBody' => fn(ParseNode $n) => $o->setRequestBody($n->getStringValue()),
            'requestUrl' => fn(ParseNode $n) => $o->setRequestUrl($n->getStringValue()),
            'tenantIds' => fn(ParseNode $n) => $o->setTenantIds($n->getStringValue()),
            'tenantNames' => fn(ParseNode $n) => $o->setTenantNames($n->getStringValue()),
        ]);
    }

    /**
     * Gets the httpVerb property value. The HTTP verb that was used when making the API request. Required. Read-only.
     * @return string|null
    */
    public function getHttpVerb(): ?string {
        $val = $this->getBackingStore()->get('httpVerb');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'httpVerb'");
    }

    /**
     * Gets the initiatedByAppId property value. The identifier of the app that was used to make the request. Required. Read-only.
     * @return string|null
    */
    public function getInitiatedByAppId(): ?string {
        $val = $this->getBackingStore()->get('initiatedByAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedByAppId'");
    }

    /**
     * Gets the initiatedByUpn property value. The UPN of the user who initiated the activity. Required. Read-only.
     * @return string|null
    */
    public function getInitiatedByUpn(): ?string {
        $val = $this->getBackingStore()->get('initiatedByUpn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedByUpn'");
    }

    /**
     * Gets the initiatedByUserId property value. The identifier of the user who initiated the activity. Required. Read-only.
     * @return string|null
    */
    public function getInitiatedByUserId(): ?string {
        $val = $this->getBackingStore()->get('initiatedByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedByUserId'");
    }

    /**
     * Gets the ipAddress property value. The IP address of where the activity was initiated. This may be an IPv4 or IPv6 address. Required. Read-only.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the requestBody property value. The raw HTTP request body. Some sensitive information may be removed.
     * @return string|null
    */
    public function getRequestBody(): ?string {
        $val = $this->getBackingStore()->get('requestBody');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestBody'");
    }

    /**
     * Gets the requestUrl property value. The raw HTTP request URL. Required. Read-only.
     * @return string|null
    */
    public function getRequestUrl(): ?string {
        $val = $this->getBackingStore()->get('requestUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestUrl'");
    }

    /**
     * Gets the tenantIds property value. The collection of Azure Active Directory tenant identifiers for the managed tenants that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     * @return string|null
    */
    public function getTenantIds(): ?string {
        $val = $this->getBackingStore()->get('tenantIds');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantIds'");
    }

    /**
     * Gets the tenantNames property value. The collection of tenant names that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     * @return string|null
    */
    public function getTenantNames(): ?string {
        $val = $this->getBackingStore()->get('tenantNames');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantNames'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->getActivity());
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeStringValue('activityId', $this->getActivityId());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('httpVerb', $this->getHttpVerb());
        $writer->writeStringValue('initiatedByAppId', $this->getInitiatedByAppId());
        $writer->writeStringValue('initiatedByUpn', $this->getInitiatedByUpn());
        $writer->writeStringValue('initiatedByUserId', $this->getInitiatedByUserId());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('requestBody', $this->getRequestBody());
        $writer->writeStringValue('requestUrl', $this->getRequestUrl());
        $writer->writeStringValue('tenantIds', $this->getTenantIds());
        $writer->writeStringValue('tenantNames', $this->getTenantNames());
    }

    /**
     * Sets the activity property value. A string which uniquely represents the operation that occurred. Required. Read-only.
     * @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the activityDateTime property value. The time when the activity ocurred. Required. Read-only.
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the activityId property value. The identifier of the activity request that made the audit event. Required. Read-only.
     * @param string|null $value Value to set for the activityId property.
    */
    public function setActivityId(?string $value): void {
        $this->getBackingStore()->set('activityId', $value);
    }

    /**
     * Sets the category property value. A category which represents a logical grouping of activities. Required. Read-only.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the httpVerb property value. The HTTP verb that was used when making the API request. Required. Read-only.
     * @param string|null $value Value to set for the httpVerb property.
    */
    public function setHttpVerb(?string $value): void {
        $this->getBackingStore()->set('httpVerb', $value);
    }

    /**
     * Sets the initiatedByAppId property value. The identifier of the app that was used to make the request. Required. Read-only.
     * @param string|null $value Value to set for the initiatedByAppId property.
    */
    public function setInitiatedByAppId(?string $value): void {
        $this->getBackingStore()->set('initiatedByAppId', $value);
    }

    /**
     * Sets the initiatedByUpn property value. The UPN of the user who initiated the activity. Required. Read-only.
     * @param string|null $value Value to set for the initiatedByUpn property.
    */
    public function setInitiatedByUpn(?string $value): void {
        $this->getBackingStore()->set('initiatedByUpn', $value);
    }

    /**
     * Sets the initiatedByUserId property value. The identifier of the user who initiated the activity. Required. Read-only.
     * @param string|null $value Value to set for the initiatedByUserId property.
    */
    public function setInitiatedByUserId(?string $value): void {
        $this->getBackingStore()->set('initiatedByUserId', $value);
    }

    /**
     * Sets the ipAddress property value. The IP address of where the activity was initiated. This may be an IPv4 or IPv6 address. Required. Read-only.
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the requestBody property value. The raw HTTP request body. Some sensitive information may be removed.
     * @param string|null $value Value to set for the requestBody property.
    */
    public function setRequestBody(?string $value): void {
        $this->getBackingStore()->set('requestBody', $value);
    }

    /**
     * Sets the requestUrl property value. The raw HTTP request URL. Required. Read-only.
     * @param string|null $value Value to set for the requestUrl property.
    */
    public function setRequestUrl(?string $value): void {
        $this->getBackingStore()->set('requestUrl', $value);
    }

    /**
     * Sets the tenantIds property value. The collection of Azure Active Directory tenant identifiers for the managed tenants that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     * @param string|null $value Value to set for the tenantIds property.
    */
    public function setTenantIds(?string $value): void {
        $this->getBackingStore()->set('tenantIds', $value);
    }

    /**
     * Sets the tenantNames property value. The collection of tenant names that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     * @param string|null $value Value to set for the tenantNames property.
    */
    public function setTenantNames(?string $value): void {
        $this->getBackingStore()->set('tenantNames', $value);
    }

}
