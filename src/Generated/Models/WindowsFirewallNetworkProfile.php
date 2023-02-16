<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Windows Firewall Profile Policies.
*/
class WindowsFirewallNetworkProfile implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsFirewallNetworkProfile and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsFirewallNetworkProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsFirewallNetworkProfile {
        return new WindowsFirewallNetworkProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyMerged(): ?bool {
        return $this->getBackingStore()->get('authorizedApplicationRulesFromGroupPolicyMerged');
    }

    /**
     * Gets the authorizedApplicationRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->getBackingStore()->get('authorizedApplicationRulesFromGroupPolicyNotMerged');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getConnectionSecurityRulesFromGroupPolicyMerged(): ?bool {
        return $this->getBackingStore()->get('connectionSecurityRulesFromGroupPolicyMerged');
    }

    /**
     * Gets the connectionSecurityRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getConnectionSecurityRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->getBackingStore()->get('connectionSecurityRulesFromGroupPolicyNotMerged');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizedApplicationRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setAuthorizedApplicationRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'authorizedApplicationRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setAuthorizedApplicationRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'connectionSecurityRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setConnectionSecurityRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'connectionSecurityRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setConnectionSecurityRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'firewallEnabled' => fn(ParseNode $n) => $o->setFirewallEnabled($n->getEnumValue(StateManagementSetting::class)),
            'globalPortRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setGlobalPortRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'globalPortRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setGlobalPortRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'inboundConnectionsBlocked' => fn(ParseNode $n) => $o->setInboundConnectionsBlocked($n->getBooleanValue()),
            'inboundConnectionsRequired' => fn(ParseNode $n) => $o->setInboundConnectionsRequired($n->getBooleanValue()),
            'inboundNotificationsBlocked' => fn(ParseNode $n) => $o->setInboundNotificationsBlocked($n->getBooleanValue()),
            'inboundNotificationsRequired' => fn(ParseNode $n) => $o->setInboundNotificationsRequired($n->getBooleanValue()),
            'incomingTrafficBlocked' => fn(ParseNode $n) => $o->setIncomingTrafficBlocked($n->getBooleanValue()),
            'incomingTrafficRequired' => fn(ParseNode $n) => $o->setIncomingTrafficRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outboundConnectionsBlocked' => fn(ParseNode $n) => $o->setOutboundConnectionsBlocked($n->getBooleanValue()),
            'outboundConnectionsRequired' => fn(ParseNode $n) => $o->setOutboundConnectionsRequired($n->getBooleanValue()),
            'policyRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setPolicyRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'policyRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setPolicyRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'securedPacketExemptionAllowed' => fn(ParseNode $n) => $o->setSecuredPacketExemptionAllowed($n->getBooleanValue()),
            'securedPacketExemptionBlocked' => fn(ParseNode $n) => $o->setSecuredPacketExemptionBlocked($n->getBooleanValue()),
            'stealthModeBlocked' => fn(ParseNode $n) => $o->setStealthModeBlocked($n->getBooleanValue()),
            'stealthModeRequired' => fn(ParseNode $n) => $o->setStealthModeRequired($n->getBooleanValue()),
            'unicastResponsesToMulticastBroadcastsBlocked' => fn(ParseNode $n) => $o->setUnicastResponsesToMulticastBroadcastsBlocked($n->getBooleanValue()),
            'unicastResponsesToMulticastBroadcastsRequired' => fn(ParseNode $n) => $o->setUnicastResponsesToMulticastBroadcastsRequired($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the firewallEnabled property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getFirewallEnabled(): ?StateManagementSetting {
        return $this->getBackingStore()->get('firewallEnabled');
    }

    /**
     * Gets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getGlobalPortRulesFromGroupPolicyMerged(): ?bool {
        return $this->getBackingStore()->get('globalPortRulesFromGroupPolicyMerged');
    }

    /**
     * Gets the globalPortRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getGlobalPortRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->getBackingStore()->get('globalPortRulesFromGroupPolicyNotMerged');
    }

    /**
     * Gets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundConnectionsBlocked(): ?bool {
        return $this->getBackingStore()->get('inboundConnectionsBlocked');
    }

    /**
     * Gets the inboundConnectionsRequired property value. Configures the firewall to allow all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundConnectionsRequired(): ?bool {
        return $this->getBackingStore()->get('inboundConnectionsRequired');
    }

    /**
     * Gets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundNotificationsBlocked(): ?bool {
        return $this->getBackingStore()->get('inboundNotificationsBlocked');
    }

    /**
     * Gets the inboundNotificationsRequired property value. Allows the firewall to display notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundNotificationsRequired(): ?bool {
        return $this->getBackingStore()->get('inboundNotificationsRequired');
    }

    /**
     * Gets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @return bool|null
    */
    public function getIncomingTrafficBlocked(): ?bool {
        return $this->getBackingStore()->get('incomingTrafficBlocked');
    }

    /**
     * Gets the incomingTrafficRequired property value. Configures the firewall to allow incoming traffic pursuant to other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @return bool|null
    */
    public function getIncomingTrafficRequired(): ?bool {
        return $this->getBackingStore()->get('incomingTrafficRequired');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @return bool|null
    */
    public function getOutboundConnectionsBlocked(): ?bool {
        return $this->getBackingStore()->get('outboundConnectionsBlocked');
    }

    /**
     * Gets the outboundConnectionsRequired property value. Configures the firewall to allow all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @return bool|null
    */
    public function getOutboundConnectionsRequired(): ?bool {
        return $this->getBackingStore()->get('outboundConnectionsRequired');
    }

    /**
     * Gets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getPolicyRulesFromGroupPolicyMerged(): ?bool {
        return $this->getBackingStore()->get('policyRulesFromGroupPolicyMerged');
    }

    /**
     * Gets the policyRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getPolicyRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->getBackingStore()->get('policyRulesFromGroupPolicyNotMerged');
    }

    /**
     * Gets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @return bool|null
    */
    public function getSecuredPacketExemptionAllowed(): ?bool {
        return $this->getBackingStore()->get('securedPacketExemptionAllowed');
    }

    /**
     * Gets the securedPacketExemptionBlocked property value. Configures the firewall to block the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @return bool|null
    */
    public function getSecuredPacketExemptionBlocked(): ?bool {
        return $this->getBackingStore()->get('securedPacketExemptionBlocked');
    }

    /**
     * Gets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @return bool|null
    */
    public function getStealthModeBlocked(): ?bool {
        return $this->getBackingStore()->get('stealthModeBlocked');
    }

    /**
     * Gets the stealthModeRequired property value. Allow the server to operate in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @return bool|null
    */
    public function getStealthModeRequired(): ?bool {
        return $this->getBackingStore()->get('stealthModeRequired');
    }

    /**
     * Gets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @return bool|null
    */
    public function getUnicastResponsesToMulticastBroadcastsBlocked(): ?bool {
        return $this->getBackingStore()->get('unicastResponsesToMulticastBroadcastsBlocked');
    }

    /**
     * Gets the unicastResponsesToMulticastBroadcastsRequired property value. Configures the firewall to allow unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @return bool|null
    */
    public function getUnicastResponsesToMulticastBroadcastsRequired(): ?bool {
        return $this->getBackingStore()->get('unicastResponsesToMulticastBroadcastsRequired');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('authorizedApplicationRulesFromGroupPolicyMerged', $this->getAuthorizedApplicationRulesFromGroupPolicyMerged());
        $writer->writeBooleanValue('authorizedApplicationRulesFromGroupPolicyNotMerged', $this->getAuthorizedApplicationRulesFromGroupPolicyNotMerged());
        $writer->writeBooleanValue('connectionSecurityRulesFromGroupPolicyMerged', $this->getConnectionSecurityRulesFromGroupPolicyMerged());
        $writer->writeBooleanValue('connectionSecurityRulesFromGroupPolicyNotMerged', $this->getConnectionSecurityRulesFromGroupPolicyNotMerged());
        $writer->writeEnumValue('firewallEnabled', $this->getFirewallEnabled());
        $writer->writeBooleanValue('globalPortRulesFromGroupPolicyMerged', $this->getGlobalPortRulesFromGroupPolicyMerged());
        $writer->writeBooleanValue('globalPortRulesFromGroupPolicyNotMerged', $this->getGlobalPortRulesFromGroupPolicyNotMerged());
        $writer->writeBooleanValue('inboundConnectionsBlocked', $this->getInboundConnectionsBlocked());
        $writer->writeBooleanValue('inboundConnectionsRequired', $this->getInboundConnectionsRequired());
        $writer->writeBooleanValue('inboundNotificationsBlocked', $this->getInboundNotificationsBlocked());
        $writer->writeBooleanValue('inboundNotificationsRequired', $this->getInboundNotificationsRequired());
        $writer->writeBooleanValue('incomingTrafficBlocked', $this->getIncomingTrafficBlocked());
        $writer->writeBooleanValue('incomingTrafficRequired', $this->getIncomingTrafficRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('outboundConnectionsBlocked', $this->getOutboundConnectionsBlocked());
        $writer->writeBooleanValue('outboundConnectionsRequired', $this->getOutboundConnectionsRequired());
        $writer->writeBooleanValue('policyRulesFromGroupPolicyMerged', $this->getPolicyRulesFromGroupPolicyMerged());
        $writer->writeBooleanValue('policyRulesFromGroupPolicyNotMerged', $this->getPolicyRulesFromGroupPolicyNotMerged());
        $writer->writeBooleanValue('securedPacketExemptionAllowed', $this->getSecuredPacketExemptionAllowed());
        $writer->writeBooleanValue('securedPacketExemptionBlocked', $this->getSecuredPacketExemptionBlocked());
        $writer->writeBooleanValue('stealthModeBlocked', $this->getStealthModeBlocked());
        $writer->writeBooleanValue('stealthModeRequired', $this->getStealthModeRequired());
        $writer->writeBooleanValue('unicastResponsesToMulticastBroadcastsBlocked', $this->getUnicastResponsesToMulticastBroadcastsBlocked());
        $writer->writeBooleanValue('unicastResponsesToMulticastBroadcastsRequired', $this->getUnicastResponsesToMulticastBroadcastsRequired());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the authorizedApplicationRulesFromGroupPolicyMerged property.
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('authorizedApplicationRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the authorizedApplicationRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the authorizedApplicationRulesFromGroupPolicyNotMerged property.
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyNotMerged(?bool $value): void {
        $this->getBackingStore()->set('authorizedApplicationRulesFromGroupPolicyNotMerged', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the connectionSecurityRulesFromGroupPolicyMerged property.
    */
    public function setConnectionSecurityRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('connectionSecurityRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the connectionSecurityRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the connectionSecurityRulesFromGroupPolicyNotMerged property.
    */
    public function setConnectionSecurityRulesFromGroupPolicyNotMerged(?bool $value): void {
        $this->getBackingStore()->set('connectionSecurityRulesFromGroupPolicyNotMerged', $value);
    }

    /**
     * Sets the firewallEnabled property value. State Management Setting.
     * @param StateManagementSetting|null $value Value to set for the firewallEnabled property.
    */
    public function setFirewallEnabled(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('firewallEnabled', $value);
    }

    /**
     * Sets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the globalPortRulesFromGroupPolicyMerged property.
    */
    public function setGlobalPortRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('globalPortRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the globalPortRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the globalPortRulesFromGroupPolicyNotMerged property.
    */
    public function setGlobalPortRulesFromGroupPolicyNotMerged(?bool $value): void {
        $this->getBackingStore()->set('globalPortRulesFromGroupPolicyNotMerged', $value);
    }

    /**
     * Sets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @param bool|null $value Value to set for the inboundConnectionsBlocked property.
    */
    public function setInboundConnectionsBlocked(?bool $value): void {
        $this->getBackingStore()->set('inboundConnectionsBlocked', $value);
    }

    /**
     * Sets the inboundConnectionsRequired property value. Configures the firewall to allow all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @param bool|null $value Value to set for the inboundConnectionsRequired property.
    */
    public function setInboundConnectionsRequired(?bool $value): void {
        $this->getBackingStore()->set('inboundConnectionsRequired', $value);
    }

    /**
     * Sets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @param bool|null $value Value to set for the inboundNotificationsBlocked property.
    */
    public function setInboundNotificationsBlocked(?bool $value): void {
        $this->getBackingStore()->set('inboundNotificationsBlocked', $value);
    }

    /**
     * Sets the inboundNotificationsRequired property value. Allows the firewall to display notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @param bool|null $value Value to set for the inboundNotificationsRequired property.
    */
    public function setInboundNotificationsRequired(?bool $value): void {
        $this->getBackingStore()->set('inboundNotificationsRequired', $value);
    }

    /**
     * Sets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @param bool|null $value Value to set for the incomingTrafficBlocked property.
    */
    public function setIncomingTrafficBlocked(?bool $value): void {
        $this->getBackingStore()->set('incomingTrafficBlocked', $value);
    }

    /**
     * Sets the incomingTrafficRequired property value. Configures the firewall to allow incoming traffic pursuant to other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @param bool|null $value Value to set for the incomingTrafficRequired property.
    */
    public function setIncomingTrafficRequired(?bool $value): void {
        $this->getBackingStore()->set('incomingTrafficRequired', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @param bool|null $value Value to set for the outboundConnectionsBlocked property.
    */
    public function setOutboundConnectionsBlocked(?bool $value): void {
        $this->getBackingStore()->set('outboundConnectionsBlocked', $value);
    }

    /**
     * Sets the outboundConnectionsRequired property value. Configures the firewall to allow all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @param bool|null $value Value to set for the outboundConnectionsRequired property.
    */
    public function setOutboundConnectionsRequired(?bool $value): void {
        $this->getBackingStore()->set('outboundConnectionsRequired', $value);
    }

    /**
     * Sets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the policyRulesFromGroupPolicyMerged property.
    */
    public function setPolicyRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('policyRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the policyRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the policyRulesFromGroupPolicyNotMerged property.
    */
    public function setPolicyRulesFromGroupPolicyNotMerged(?bool $value): void {
        $this->getBackingStore()->set('policyRulesFromGroupPolicyNotMerged', $value);
    }

    /**
     * Sets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @param bool|null $value Value to set for the securedPacketExemptionAllowed property.
    */
    public function setSecuredPacketExemptionAllowed(?bool $value): void {
        $this->getBackingStore()->set('securedPacketExemptionAllowed', $value);
    }

    /**
     * Sets the securedPacketExemptionBlocked property value. Configures the firewall to block the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @param bool|null $value Value to set for the securedPacketExemptionBlocked property.
    */
    public function setSecuredPacketExemptionBlocked(?bool $value): void {
        $this->getBackingStore()->set('securedPacketExemptionBlocked', $value);
    }

    /**
     * Sets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @param bool|null $value Value to set for the stealthModeBlocked property.
    */
    public function setStealthModeBlocked(?bool $value): void {
        $this->getBackingStore()->set('stealthModeBlocked', $value);
    }

    /**
     * Sets the stealthModeRequired property value. Allow the server to operate in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @param bool|null $value Value to set for the stealthModeRequired property.
    */
    public function setStealthModeRequired(?bool $value): void {
        $this->getBackingStore()->set('stealthModeRequired', $value);
    }

    /**
     * Sets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @param bool|null $value Value to set for the unicastResponsesToMulticastBroadcastsBlocked property.
    */
    public function setUnicastResponsesToMulticastBroadcastsBlocked(?bool $value): void {
        $this->getBackingStore()->set('unicastResponsesToMulticastBroadcastsBlocked', $value);
    }

    /**
     * Sets the unicastResponsesToMulticastBroadcastsRequired property value. Configures the firewall to allow unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @param bool|null $value Value to set for the unicastResponsesToMulticastBroadcastsRequired property.
    */
    public function setUnicastResponsesToMulticastBroadcastsRequired(?bool $value): void {
        $this->getBackingStore()->set('unicastResponsesToMulticastBroadcastsRequired', $value);
    }

}
