<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Command extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new command and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Command
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Command {
        return new Command();
    }

    /**
     * Gets the appServiceName property value. The appServiceName property
     * @return string|null
    */
    public function getAppServiceName(): ?string {
        $val = $this->getBackingStore()->get('appServiceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appServiceName'");
    }

    /**
     * Gets the error property value. The error property
     * @return string|null
    */
    public function getError(): ?string {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appServiceName' => fn(ParseNode $n) => $o->setAppServiceName($n->getStringValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'packageFamilyName' => fn(ParseNode $n) => $o->setPackageFamilyName($n->getStringValue()),
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getObjectValue([PayloadRequest::class, 'createFromDiscriminatorValue'])),
            'permissionTicket' => fn(ParseNode $n) => $o->setPermissionTicket($n->getStringValue()),
            'postBackUri' => fn(ParseNode $n) => $o->setPostBackUri($n->getStringValue()),
            'responsepayload' => fn(ParseNode $n) => $o->setResponsepayload($n->getObjectValue([PayloadResponse::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the packageFamilyName property value. The packageFamilyName property
     * @return string|null
    */
    public function getPackageFamilyName(): ?string {
        $val = $this->getBackingStore()->get('packageFamilyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageFamilyName'");
    }

    /**
     * Gets the payload property value. The payload property
     * @return PayloadRequest|null
    */
    public function getPayload(): ?PayloadRequest {
        $val = $this->getBackingStore()->get('payload');
        if (is_null($val) || $val instanceof PayloadRequest) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payload'");
    }

    /**
     * Gets the permissionTicket property value. The permissionTicket property
     * @return string|null
    */
    public function getPermissionTicket(): ?string {
        $val = $this->getBackingStore()->get('permissionTicket');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionTicket'");
    }

    /**
     * Gets the postBackUri property value. The postBackUri property
     * @return string|null
    */
    public function getPostBackUri(): ?string {
        $val = $this->getBackingStore()->get('postBackUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postBackUri'");
    }

    /**
     * Gets the responsepayload property value. The responsepayload property
     * @return PayloadResponse|null
    */
    public function getResponsepayload(): ?PayloadResponse {
        $val = $this->getBackingStore()->get('responsepayload');
        if (is_null($val) || $val instanceof PayloadResponse) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responsepayload'");
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appServiceName', $this->getAppServiceName());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('packageFamilyName', $this->getPackageFamilyName());
        $writer->writeObjectValue('payload', $this->getPayload());
        $writer->writeStringValue('permissionTicket', $this->getPermissionTicket());
        $writer->writeStringValue('postBackUri', $this->getPostBackUri());
        $writer->writeObjectValue('responsepayload', $this->getResponsepayload());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the appServiceName property value. The appServiceName property
     * @param string|null $value Value to set for the appServiceName property.
    */
    public function setAppServiceName(?string $value): void {
        $this->getBackingStore()->set('appServiceName', $value);
    }

    /**
     * Sets the error property value. The error property
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the packageFamilyName property value. The packageFamilyName property
     * @param string|null $value Value to set for the packageFamilyName property.
    */
    public function setPackageFamilyName(?string $value): void {
        $this->getBackingStore()->set('packageFamilyName', $value);
    }

    /**
     * Sets the payload property value. The payload property
     * @param PayloadRequest|null $value Value to set for the payload property.
    */
    public function setPayload(?PayloadRequest $value): void {
        $this->getBackingStore()->set('payload', $value);
    }

    /**
     * Sets the permissionTicket property value. The permissionTicket property
     * @param string|null $value Value to set for the permissionTicket property.
    */
    public function setPermissionTicket(?string $value): void {
        $this->getBackingStore()->set('permissionTicket', $value);
    }

    /**
     * Sets the postBackUri property value. The postBackUri property
     * @param string|null $value Value to set for the postBackUri property.
    */
    public function setPostBackUri(?string $value): void {
        $this->getBackingStore()->set('postBackUri', $value);
    }

    /**
     * Sets the responsepayload property value. The responsepayload property
     * @param PayloadResponse|null $value Value to set for the responsepayload property.
    */
    public function setResponsepayload(?PayloadResponse $value): void {
        $this->getBackingStore()->set('responsepayload', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
