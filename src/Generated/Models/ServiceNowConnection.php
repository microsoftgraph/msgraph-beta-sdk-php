<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * ServiceNow properties including the ServiceNow instanceUrl, connection credentials and other metadata.
*/
class ServiceNowConnection extends Entity implements Parsable 
{
    /**
     * Instantiates a new serviceNowConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceNowConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceNowConnection {
        return new ServiceNowConnection();
    }

    /**
     * Gets the authenticationMethod property value. Indicates the method used by Intune to authenticate with ServiceNow. Currently supports only web authentication with ServiceNow using the specified app id.
     * @return ServiceNowAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?ServiceNowAuthenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof ServiceNowAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the createdDateTime property value. Date Time when connection properties were created. The value cannot be modified and is automatically populated when the connection properties were entered.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getObjectValue([ServiceNowAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'incidentApiUrl' => fn(ParseNode $n) => $o->setIncidentApiUrl($n->getStringValue()),
            'instanceUrl' => fn(ParseNode $n) => $o->setInstanceUrl($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastQueriedDateTime' => fn(ParseNode $n) => $o->setLastQueriedDateTime($n->getDateTimeValue()),
            'serviceNowConnectionStatus' => fn(ParseNode $n) => $o->setServiceNowConnectionStatus($n->getEnumValue(ServiceNowConnectionStatus::class)),
        ]);
    }

    /**
     * Gets the incidentApiUrl property value. Indicates the ServiceNow incident API URL that Intune will use the fetch incidents. Saved in the format of /api/now/table/incident
     * @return string|null
    */
    public function getIncidentApiUrl(): ?string {
        $val = $this->getBackingStore()->get('incidentApiUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentApiUrl'");
    }

    /**
     * Gets the instanceUrl property value. Indicates the ServiceNow instance URL that Intune will connect to. Saved in the format of https://.service-now.com
     * @return string|null
    */
    public function getInstanceUrl(): ?string {
        $val = $this->getBackingStore()->get('instanceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'instanceUrl'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date Time when connection properties were last updated. The value cannot be modified and is automatically populated when the connection properties were updated.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the lastQueriedDateTime property value. Date Time when incidents from ServiceNow were last queried
     * @return DateTime|null
    */
    public function getLastQueriedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastQueriedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastQueriedDateTime'");
    }

    /**
     * Gets the serviceNowConnectionStatus property value. Status of ServiceNow Connection
     * @return ServiceNowConnectionStatus|null
    */
    public function getServiceNowConnectionStatus(): ?ServiceNowConnectionStatus {
        $val = $this->getBackingStore()->get('serviceNowConnectionStatus');
        if (is_null($val) || $val instanceof ServiceNowConnectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceNowConnectionStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('incidentApiUrl', $this->getIncidentApiUrl());
        $writer->writeStringValue('instanceUrl', $this->getInstanceUrl());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('lastQueriedDateTime', $this->getLastQueriedDateTime());
        $writer->writeEnumValue('serviceNowConnectionStatus', $this->getServiceNowConnectionStatus());
    }

    /**
     * Sets the authenticationMethod property value. Indicates the method used by Intune to authenticate with ServiceNow. Currently supports only web authentication with ServiceNow using the specified app id.
     * @param ServiceNowAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?ServiceNowAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the createdDateTime property value. Date Time when connection properties were created. The value cannot be modified and is automatically populated when the connection properties were entered.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the incidentApiUrl property value. Indicates the ServiceNow incident API URL that Intune will use the fetch incidents. Saved in the format of /api/now/table/incident
     * @param string|null $value Value to set for the incidentApiUrl property.
    */
    public function setIncidentApiUrl(?string $value): void {
        $this->getBackingStore()->set('incidentApiUrl', $value);
    }

    /**
     * Sets the instanceUrl property value. Indicates the ServiceNow instance URL that Intune will connect to. Saved in the format of https://.service-now.com
     * @param string|null $value Value to set for the instanceUrl property.
    */
    public function setInstanceUrl(?string $value): void {
        $this->getBackingStore()->set('instanceUrl', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date Time when connection properties were last updated. The value cannot be modified and is automatically populated when the connection properties were updated.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastQueriedDateTime property value. Date Time when incidents from ServiceNow were last queried
     * @param DateTime|null $value Value to set for the lastQueriedDateTime property.
    */
    public function setLastQueriedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastQueriedDateTime', $value);
    }

    /**
     * Sets the serviceNowConnectionStatus property value. Status of ServiceNow Connection
     * @param ServiceNowConnectionStatus|null $value Value to set for the serviceNowConnectionStatus property.
    */
    public function setServiceNowConnectionStatus(?ServiceNowConnectionStatus $value): void {
        $this->getBackingStore()->set('serviceNowConnectionStatus', $value);
    }

}
